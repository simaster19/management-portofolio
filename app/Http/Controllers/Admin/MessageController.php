<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $datas = Message::with(['user'])->get();
        return view('admin.app.messages.index', [
            'datas' => $datas
        ]);
    }

    public function destroy($id)
    {
        Message::destroy($id);

        return redirect()->route('message');
    }
}
