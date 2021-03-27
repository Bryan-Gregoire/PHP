@extends('canvas')

@section('title', 'Valves - Contenu du message')

@section('header', 'Contenu du message')

@section('content')

<p> {{ $msgContent[0]->content }} <p>

<a href="{{ URL::to('') }}">Retour aux valves</a>

@endsection