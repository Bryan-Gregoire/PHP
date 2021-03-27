@extends('canvas')

@section('title', 'TODO Description')

@section('header', 'Tâche : ' . $todos[0]->name)
@section('content')
<p> 
    {{ $todos[0]->description }}
</p>

<a href="{{ URL::to('todos') }}">Retour a la liste</a>

@endsection