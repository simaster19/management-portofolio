<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RequestUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $datas = User::all();
        return view('admin.app.users.index', [
            'datas' => $datas
        ]);
    }


    public function create()
    {
        return view('admin.app.users.create');
    }


    public function store(Request $request)
    {

        $data = $request->all();

        $data['foto'] = $request->file('foto')->store(
            'assets/images/foto',
            ['disk' => 'public']
        );
        $data['foto'] = $request->file('background')->store(
            'assets/images/background',
            ['disk' => 'public']
        );

        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()->route('users.index')->with(
            [
                'success' => 'Data berhasil ditambahkan!',
                'style' => 'success'
            ]
        );
    }

    public function show($id)
    {
        $data = User::where('id', $id)->get()->first();

        return view('admin.app.users.detail', [
            'data' => $data
        ]);
    }


    public function edit($id)
    {
        $data = User::where('id', $id)->get()->first();
        return view('admin.app.users.edit', [
            'data' => $data
        ]);
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $dataUser = User::findOrFail($id);

        if ($request->has('foto')) {
            File::delete('storage/' . $dataUser['foto']);

            $data['foto'] = $request->file('foto')->store(
                'assets/images/foto',
                ['disk' => 'public']
            );
        } else {
            $data['foto'] = $dataUser['foto'];
        }

        if ($request->has('background')) {
            File::delete('storage/' . $dataUser['background']);

            $data['background'] = $request->file('background')->store(
                'assets/images/background',
                ['disk' => 'public']
            );
        } else {
            $data['background'] = $dataUser['background'];
        }


        if ($data['password'] == '') {
            $data['password'] = $dataUser['password'];
        } else {
            $data['password'] = Hash::make($data['password']);
        }


        $dataUser->update($data);

        return redirect()->route('users.index')->with([
            'success' => 'Data berhasil diubah!',
            'style' => 'success'
        ]);
    }


    public function destroy($id)
    {
        $data = User::findOrFail($id);
        File::delete('storage/' . $data['foto']);
        File::delete('storage/' . $data['background']);
        $data->destroy($id);

        return redirect()->route('users.index')->with([
            'success' => 'Data berhasil dihapus!',
            'style' => 'danger'
        ]);
    }
}
