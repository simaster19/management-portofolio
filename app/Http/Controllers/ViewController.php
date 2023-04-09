<?php






namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {
        return view('index', [
            'skills' => Skill::all(),
            'projects' => Project::with(['image'])->get()
        ]);
    }

    public function show($slug)
    {
        return view('detail', [
            'data' => Project::with(['image'])->where('slug', $slug)->get()->first()
        ]);
    }
}
