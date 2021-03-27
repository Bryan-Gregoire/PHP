<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
    public function index()
    {
        //$this->insertTodo();

        if (isset($_POST['todo'])) {
            Todo::addTodo($_POST['todo'], $_POST['descript']);
        }
        $todos = Todo::findAll();

        return view('todo', compact("todos")); //compact("todos") équivalent a ['todos' => $todos]
    }

    public function getDescription($id_Description)
    {
        $todos = Todo::getTodoDescription($id_Description);
        return view('description', compact("todos"));
    }

    /*     public function insertTodo()
    {
        if (isset($_POST['todo'])) {
            $_POST['descript'] ? Todo::addTodo($_POST['todo'], $_POST['descript']) : Todo::addTodo($_POST['todo']); //condition toujours respecté, pourquoi ?
        }
    } */
}
