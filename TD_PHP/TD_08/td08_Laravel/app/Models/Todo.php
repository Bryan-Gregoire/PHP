<?php

namespace App\Models;

use Illuminate\Support\Facades\DB; // Fonctionne sans, mais pour éviter d'afficher des erreurs dans les fichiers.

class Todo
{
    public static function findAll()
    {
        $todos = /*\*/ DB::select('select * from todos');
        return $todos;
    }

    public static function getTodoDescription($id)
    {
        $description = /*\*/ DB::select('select * from todos where id = ' . $id);
        return $description;
    }
}
