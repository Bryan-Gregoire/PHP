<?php
function getAllMessages() {
    $db = new PDO(
        "mysql:host=localhost;dbname=ValvesDB;charset=utf8","webii","123",
        [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $sql = "SELECT Message.msg_date, Author.name, Message.title"
                ." FROM Message JOIN Author"
                ." WHERE Message.author = Author.id"
                ." ORDER BY msg_date DESC";
    $result = $db->query($sql);
    return $result;
}
