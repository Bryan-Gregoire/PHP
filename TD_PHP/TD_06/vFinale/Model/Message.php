<?php
require_once 'Model.php';
class Message extends Model {

    public function getAllMessages() {
        $sql = "SELECT Message.msg_date, Author.name, Message.title"
                    ." FROM Message JOIN Author"
                    ." WHERE Message.author = Author.id"
                    ." ORDER BY msg_date DESC";
        return $this->executeRequest($sql);
    }

}
