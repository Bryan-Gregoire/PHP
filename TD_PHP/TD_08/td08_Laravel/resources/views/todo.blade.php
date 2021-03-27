@extends('canvas')

@section('title', 'TODO')

@section('content')
<h1> A faire...</h1>
@if (count($todos) === 0)
<p> Rien pour le moment :)</p>
@else
<ul>
    @foreach ($todos as $tache)
    <li>{{ $tache->name }} : {{ $tache->description }} </li>
    @endforeach
</ul>
@endif

@endsection