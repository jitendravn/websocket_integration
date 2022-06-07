<?php

namespace App\Http\Controllers;

use App\Events\BroadcastNotification;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use ParagonIE\Sodium\Compat;

class ChatController extends Controller
{

    public function index()
    {
        return view('chats.chat');
    }

    public function sendMessage(Request $request)
    {
        $user = User::get();
        broadcast(new BroadcastNotification($user))->toOthers();
        return view('chats.chat')->with(['message' => 'message sent successfully']);
    }
}
