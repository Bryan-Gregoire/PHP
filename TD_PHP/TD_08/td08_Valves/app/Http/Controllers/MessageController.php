<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Exception;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::findAllMessage();
        return view('message', compact("messages"));
    }

    public function msgContent($id)
    {
        $msgContent = Message::getMessageContent($id);
        if ($msgContent == null) {
            return view('error');
        }
        return view('msgContent', compact("msgContent"));
    }
}
