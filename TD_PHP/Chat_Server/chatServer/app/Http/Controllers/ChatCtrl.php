<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatCtrl extends Controller
{
    public static function getChannels()
    {
        $channels = Chat::getAllChannels();
        return response()->json($channels);
    }

    public function getChatRoomIdMessages($channelId)
    {
        $messages = Chat::getChannelMessages($channelId);
        return response()->json($messages);
    }

    public function postMessage($channelId, Request $request)
    {
        Chat::insertMessage($channelId, $request["login"], $request["content"]);
        return response()->json(
            [
                "content" => $request["content"],
                "login" => Chat::getDisplayName($request["login"])
            ]
        );
    }

    public function home()
    {
        $users = Chat::getUsers();
        return view("home", compact("users"));
    }

    public function showMessages($idChannel)
    {
        return  view("chat", compact("idChannel"));
    }

    public function login(Request $request)
    {
        setcookie("pseudo", $request->login);
        return redirect()->back();
    }
}
