<?php
try {
    require 'Model.php';
    $allMessages = getAllMessages();
    require 'ViewAllMessages.php';
} catch (PDOException $e) {
    require 'ViewError.php';
}