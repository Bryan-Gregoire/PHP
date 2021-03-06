<?php
require_once 'Model.php';
class Message extends Model
{

    public function getAllMessages()
    {
        $sql = "SELECT Message.msg_date, Author.name, Message.title, Message.id"
            . " FROM Message JOIN Author"
            . " WHERE Message.author = Author.id"
            . " ORDER BY msg_date DESC";
        return $this->executeRequest($sql);
    }

    public function getContentMessage()
    {
        if (isset($_GET['id'])) {
            $id_mes = $_GET['id'];
            $sql = "SELECT content FROM Message WHERE id=:content";
            $result =  $this->executeRequest($sql, ['content' => $id_mes]);
            $content = $result->fetch();
            return $content['content'];
        }
    }
}
