<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Message
{
    public static function findAllMessage()
    {
        $messages = /*\*/ DB::select('select Message.id id, Message.msg_date date, Author.name autName, Message.title title from message JOIN Author WHERE Message.author = Author.id');
        return $messages;
    }

    public static function getMessageContent($id)
    {
        $content = DB::select('select content from Message where id = ' . $id);
        return $content;
    }
}
