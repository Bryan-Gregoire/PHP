<?php
require 'Model/Message.php';

function allMessages()
{
    // Pas de paramètre supplémentaire ici
    $message = new Message();
    $allMessages = $message->getAllMessages();
    require "View/AllMessages.php";
}

function contentMessage()
{
    $id_mes = $_GET['id'];
    $message = new Message();
    $contMessage = $message->getContentMessage($id_mes);
    require "View/MessageContent.php";
}
