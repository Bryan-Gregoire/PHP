<?php
require 'Message.php';

function allMessages() {
    // Pas de paramètre supplémentaire ici
    $message = new Message();
    $allMessages = $message->getAllMessages();
    require "ViewAllMessages.php";
}