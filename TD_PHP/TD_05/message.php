<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=valvesdb;charset=utf8", "webii", "123");
} catch (PDOException $e) {
    echo "Connexion pas pu se faire";
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT id,content FROM message WHERE id=:cont";
    $result = $pdo->prepare($sql);
    $result->execute(['cont' => $id]);
    $cont = $result->fetch();
    echo $cont['content'];
}
