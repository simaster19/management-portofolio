<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\RequestProject;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Project::with(['user'])->get();
        return view('admin.app.projects.index', [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.app.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = Auth::user()->id;
        $gambars = $request->file('gambar');

        $data = $request->all();

        $data['cover'] = $request->file('cover')->store(
            'assets/cover',
            ['disk' => 'public']
        );

        $project = Project::create([
            'id_user' => $id_user,
            'cover' => $data['cover'],
            'jenis_project' => $data['jenis_project'],
            'judul' => $data['judul_project'],
            'slug' => Str::of($data['judul_project'])->slug('-'),
            'project_url' => $data['project_url'],
            'keterangan' => $data['keterangan'],
            'dibuat_dengan' => implode(',', $data['development'])

        ]);


        if ($request->has('gambar')) {
            foreach ($gambars as $gambar) {

                Image::create([
                    'id_project' => $project['id'],
                    'gambar' => $gambar->store(
                        'assets/gambar',
                        ['disk' => 'public']
                    )
                ]);
            }
        }


        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.app.projects.detail', [
            'data' => Project::with(['user', 'image'])->where('id', $id)->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.app.projects.edit', [
            'data' => Project::with(['image'])->where('id', $id)->get()->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_user = Auth::user()->id;
        $project = Project::with(['image'])->where('id', $id)->get()->first();

        $gambars = $request->file('gambar');
        $data = $request->all();
        $data['cover'] = $project['cover'];

        if ($request->has('cover')) {
            File::delete('storage/' . $project['cover']);

            $data['cover'] = $request->file('cover')->store(
                'assets/cover',
                ['disk' => 'public']
            );
        }

        if ($request->has('gambar')) {
            foreach ($project->image as $gambarX) {
                File::delete('storage/' . $gambarX['gambar']);
            }
            foreach ($gambars as $gambar) {
                Image::create([
                    'id_project' => $project['id'],
                    'gambar' => $gambar->store(
                        'assets/gambar',
                        ['disk' => 'public']
                    )
                ]);
            }
        }


        $project_update = Project::findOrFail($id);
        $project_update->update([
            'id_user' => $id_user,
            'cover' => $data['cover'],
            'jenis_project' => $data['jenis_project'],
            'judul' => $data['judul_project'],
            'slug' => Str::of($data['judul_project'])->slug('-'),
            'project_url' => $data['project_url'],
            'keterangan' => $data['keterangan'],
            'dibuat_dengan' => $data['development']

        ]);

        return redirect()->route('projects.index');
    }


    public function destroy($id)
    {
        $data = Project::where('id', $id)->get()->first();
        $image = Image::where('id_project', $id)->get();
        if ($image) {
            foreach ($image as $images) {
                File::delete('storage/' . $images['gambar']);
            }
        }
        File::delete('storage/' . $data['cover']);
        Project::destroy($id);

        return redirect()->route('projects.index');
    }
}
