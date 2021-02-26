<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=valvesdb;charset=utf8", "webii", "123");
} catch (PDOException $e) {
    echo "Connexion pas pu se faire";
}

// Faire des requetes
$sql = "SELECT name,title,msg_date,msg.id id FROM message msg JOIN author aut ON msg.author = aut.id ORDER BY  msg_date DESC";
$result = $pdo->query($sql);

// On vas recuperer et afficher les resultat :

echo "<table>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . "<a href = message.php?id=$row[id]>" . $row['title']. "</a>" . "</td>";
    echo "<td>" . $row['msg_date'] . "</td> ";
    echo "</tr>";
}
echo "</table>";


$pdo = null;
?>

<style>
    tr,td,th {
        padding: 0.5em;
        text-align: center;
        border: 1px #0080b5 solid;
    }

    th {
        background: #006385;
        color: white;
    }
</style>