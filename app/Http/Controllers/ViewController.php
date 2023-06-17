<?php






namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {
        $users = User::select('name', 'email', 'foto', 'background')->where('roles', 'admin')->get()->first();
        $projects = Project::with(['image'])->get();
        $skills = Skill::all();

        return view('index', [
            'users' => $users,
            'skills' => $skills,
            'projects' => $projects
        ]);
    }

    public function show($slug)
    {
        $data = Project::with(['image'])->where('slug', $slug)->get()->first();
        $dibuat_dengan = explode(',', $data['dibuat_dengan']);

        return view('detail', [
            'data' => $data,
            'dibuat_dengan' => $dibuat_dengan
        ]);
    }
}
