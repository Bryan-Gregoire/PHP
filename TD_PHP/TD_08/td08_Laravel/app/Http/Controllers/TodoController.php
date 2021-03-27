<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::findAll();

        return view('todo', compact("todos")); //compact("todos") c'est comme ci je fesait ['todos' => $todos]
    }
}
