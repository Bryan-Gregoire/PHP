@extends('canvas')

@section('title', 'TODO Description')

@section('header', 'Tâche : ' . $todos->name)
@section('content')
<p>
    {{ $todos->description }}
</p>

<a href="{{ URL::to('todos') }}">Retour a la liste</a>

@endsection