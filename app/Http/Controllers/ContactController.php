<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'message' => 'required|string',
        ]);

        Message::create($request->only('name', 'email', 'message'));

        return redirect()->route('contact')
                         ->with('success', 'Pesan berhasil terkirim! Aku akan segera membalasnya. 🌿');
    }
}
