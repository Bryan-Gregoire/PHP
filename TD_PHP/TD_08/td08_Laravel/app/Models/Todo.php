<?php

namespace App\Models;
//use Illuminate\Support\Facades\DB;

class Todo
{
    public static function findAll()
    {
        $todos = \DB::select('select * from todos');
        return $todos;
    }
}
