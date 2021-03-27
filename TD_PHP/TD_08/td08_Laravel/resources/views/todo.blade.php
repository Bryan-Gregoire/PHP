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

@endsection