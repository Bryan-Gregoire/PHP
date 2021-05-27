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
    function loadMsg() {
        $.getJSON("/api/channels/{{ $idChannel }}/messages", function(data, status) {
            $("#messages").empty();
            data.forEach(e => {
                $("#messages").append("<div>" + e.displayName + "<br>" + e.content + "<br> <br>");
                // $("#messages").append($("<div>")
                //    .append($("<p class='name'>").text(e.login))
                //    .append($("<p class='content'>").text(e.content)));
            });
        });

    }
    loadMsg();
    window.setInterval(loadMsg, 5000);

    $('#addMsg').submit(function(e) {
        e.preventDefault();
        $('#errors').text("");
        $.post('/api/channels/{{ $idChannel }}/messages',
            $(this).serialize(),
            function(data) {
                let infos = JSON.parse(data)
                $("#messages").append("<div>").append(infos.login).append("<br>" + infos.content + "<br> <br>");
                // $("#messages").append($("<div>")
                //   .append($("<p class='name'>").text(infos.login))
                //  .append($("<p class='content'>").text(infos.content)));
            }, 'text'
        ).fail(function(jqXhr, textStatus, errorThrown) {
            $('#errors').append("Erreur, veuillez réessayer");
        });
        $('#content').val("");
    });
</script>

@endsection