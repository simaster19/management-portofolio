<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('admin.app.index', [
            'users' => User::count(),
            'messages' => Message::count(),
            'projects' => Project::count(),
            'skills' => Skill::count()
        ]);
    }
}
