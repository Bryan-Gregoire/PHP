<?php
try {
    require 'Message.php';
    $message = new Message();
    $allMessages = $message->getAllMessages();
    require 'ViewAllMessages.php';
} catch (PDOException $e) {
    require 'ViewError.php';
}