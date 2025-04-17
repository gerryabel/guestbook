<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('guestbook', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        Message::create($request->only('name', 'message'));
        return redirect('/')->with('success', 'Pesan berhasil ditambahkan!');
    }
}

