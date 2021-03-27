@extends('canvas')

@section('title', 'Messages')

@section('header', 'Tous les messages')

@section('content')

<table class='messages'>
    <tr>
        <th>Date</th>
        <th>Auteur</th>
        <th>Titre</th>
    </tr>
    @foreach($messages as $msg)
    <tr>
        <td> {{ $msg->date }} </td>
        <td> {{ $msg->autName }} </td>
        <td> <a href="{{ URL::to('message', ['id' => $msg->id]) }} "> {{ $msg->title }} </a> </td>
    </tr>
    @endforeach
</table>

@endsection