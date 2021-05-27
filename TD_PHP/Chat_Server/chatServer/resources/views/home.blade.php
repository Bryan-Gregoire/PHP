@extends('canvas')

@section('title', 'Acceuil')

@section('header', 'Acceuil')

@section('content')

<p> Test </p>



<div id="channels"></div>

@if(isset($_COOKIE["pseudo"]))
<script>
    $.getJSON("/api/channels/", function(data, status) {

        data.forEach(e => {
            $("#channels").append("<a href='/chat/" + e.id + "'>" + e.name + "</a>");
            $("#channels").append($("<br>"));
        });
    })
</script>
@endif

<br>

<form action="/login" method="POST">
    @CSRF
    <select name="login">
        @foreach($users as $user)
        <option value="{{$user->login}}"> {{$user->displayName}}</option>
        @endforeach
    </select>
    <button>Connecter</button>
</form>


@endsection