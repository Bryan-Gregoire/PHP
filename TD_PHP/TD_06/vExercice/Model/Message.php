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

    public function getContentMessage($id)
    {
        $sql = "SELECT content FROM Message WHERE id=:content";
        $result =  $this->executeRequest($sql, ['content' => $id]);
        $content = $result->fetch();
        if (!$content) {
            throw new Exception();
        }
        return $content['content'];
    }
}
