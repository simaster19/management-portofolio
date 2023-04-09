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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.app.users.index', [
            'datas' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.app.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $data['foto'] = $request->file('foto')->store(
            'assets/images',
            ['disk' => 'public']
        );

        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
                'assets/images',
                ['disk' => 'public']
            );
        } else {
            $data['foto'] = $dataUser['foto'];
        }

        if ($data['password'] == '') {
            $data['password'] = $dataUser['password'];
        } else {
            $data['password'] = Hash::make($data['password']);
        }

        $dataUser->update($data);

        return redirect()->route('users.index');
    }


    public function destroy($id)
    {
        $data = User::findOrFail($id);
        File::delete('storage/' . $data['foto']);
        $data->destroy($id);

        return redirect()->route('users.index');
    }
}
