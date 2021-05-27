<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public static function getAllChannels()
    {
        return DB::select("SELECT id, name, topic FROM channels");
    }

    public static function getChannelMessages($id)
    {
        return DB::select("SELECT messages.id, added_on, content, author_id, chan_id, chatusers.login, chatusers.displayName 
         FROM messages
         JOIN chatusers ON chatusers.id = author_id
         WHERE chan_id = ? ORDER BY added_on ASC", [$id]);
    }

    public static function insertMessage($channelId, $login, $content)
    {
        $Auth = DB::selectOne("SELECT id FROM chatusers WHERE login = ?", [$login]);
        return DB::insert("INSERT into messages(chan_id, author_id, content) VALUES (?,?,?)", [$channelId, $Auth->id, $content]);
    }

    public static function getUsers()
    {
        return DB::select("SELECT login, displayName FROM chatusers");
    }

    public static function getDisplayName($login)
    {
        return DB::selectOne("SELECT displayName FROM chatusers WHERE login = ?", [$login])->displayName;
    }
}
