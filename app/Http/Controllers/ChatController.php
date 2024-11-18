<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;



class ChatController extends Controller
{
    public function index()
    {
        return Message::all();
    }

    public function store(Request $request)
    {

    $validated = $request->validate([
        'user' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    $message = Message::create($validated);

    return response()->json($message, 201);
}
    }

