<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $datas = Message::all();
        return view('admin.app.messages.index', [
            'datas' => $datas
        ]);
    }

    public function destroy($id)
    {
        Message::destroy($id);

        return redirect()->route('message')->with(['success' => 'Data berhasil dihapus!', 'style' => 'success']);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $message = Message::create($data);

        return response()->json([
            'message' => 'Success Send Message!',
        ]);
    }
}
