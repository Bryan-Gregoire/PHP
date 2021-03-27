@extends('canvas')

@section('title', 'Erreur')

@section('header', 'Erreur')

@section('content')

<p> Une erreur est survenue. Veuillez réessayer.</p>

<a href="{{ URL::to('') }}">Retour aux valves</a>

@endsection