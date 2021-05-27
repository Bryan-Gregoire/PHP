@extends('canvas')

@section('title', 'Chat')

@section('header', 'Chat')

@section('content')

<p> Voici tous les messages </p>

<div id="messages"></div>

<form id="addMsg">
    @CSRF
    <input type="hidden" name="login" value="{{ $_COOKIE['pseudo'] }}">
    <textarea id="content" name="content"></textarea>
    <button>Envoyer</button>
</form>

<div id="errors">

</div>

<script>
    $.getJSON("/api/channels/{{ $idChannel }}/messages", function(data, status) {
        console.log(data);
        data.forEach(e => {
            $("#messages").append("<div>" + e.displayName + "<br>" + e.content + "<br> <br>");
        });
    });

    $('#addMsg').submit(function(e) {
        e.preventDefault();
        $('#errors').text("");
        $.post('/api/channels/{{ $idChannel }}/messages',
            $(this).serialize(),
            function(data) {
                let infos = JSON.parse(data)
                $("#messages").append("<div>" + infos.login + "<br>" + infos.content + "<br> <br>");
            }, 'text'
        ).fail(function(jqXhr, textStatus, errorThrown) {
            $('#errors').append("Erreur, veuillez réessayer");
        });
    });
</script>

@endsection