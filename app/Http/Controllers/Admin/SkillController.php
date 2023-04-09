<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{

    public function index()
    {
        $datas = Skill::with(['user'])->get();
        return view('admin.app.skills.index', [
            'datas' => $datas
        ]);
    }


    public function create()
    {
        return view('admin.app.skills.create');
    }

    public function store(Request $request)
    {
        $id_user = Auth::user()->id;
        $data = $request->all();

        Skill::create([
            'id_user' => $id_user,
            'skills' => $data['skill'],
            'persen' => $data['persen']
        ]);

        return redirect()->route('skills.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data = Skill::where('id', $id)->get()->first();

        return view('admin.app.skills.edit', [
            'data' => $data
        ]);
    }


    public function update(Request $request, $id)
    {

        $data_id = Skill::findOrFail($id);
        $data = $request->all();

        $data_id->update([
            'id_user' => Auth::user()->id,
            'skills' => $data['skill'],
            'persen' => $data['persen']
        ]);

        return redirect()->route('skills.index');
    }


    public function destroy($id)
    {
        $data = Skill::findOrFail($id);
        $data->destroy($id);

        return redirect()->route('skills.index');
    }
}
