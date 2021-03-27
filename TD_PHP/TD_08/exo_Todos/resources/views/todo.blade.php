@extends('canvas')

@section('title', 'TODO')

@section('header', 'A faire... ')
@section('content')
@if (count($todos) === 0)
<p> Rien pour le moment :)</p>
@else
<ul>
    @foreach ($todos as $tache)
    <li> <a href="{{ URL::to('todos', ['id' => $tache->id]) }}"> {{ $tache->name }} </a> </li>
    @endforeach
</ul>
@endif

<form action=" {{ URL::to('todos') }}" method="post">
    @csrf
    <label for="todo">Tache à ajouter : </label>
    <input type="text" name="todo" placeholder="Tâche ...">
    <input type="text" name="descript" placeholder="description de la tâche...">
    <input type="submit" name="add" value="Ajouter">
</form>

@endsection