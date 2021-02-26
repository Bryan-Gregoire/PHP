<?php

try {

    $pdo = new PDO("mysql:host=localhost;dbname=valvesdb;charset=utf8", "webii", "123"); // ATTR_ERRMODE est une constante de la classe PDO,
    // les " :: " pour l'accès statique de a un des attributs de PDO. 

} catch (PDOException $e) {
    echo "Connexion pas pu se faire";
}

?>

<form action="exo_1.php">
    <select name="author_id">
        <option value="1">MCD</option>
        <option value="2">NRI</option>
    </select>
    <button>Submit</button>
</form>
<?php

if (isset($_REQUEST['author_id'])) {
    $id = $_REQUEST['author_id'];

    // Faire des requetes
    $sql = "SELECT * FROM Message WHERE Author=:authorId";
    $result = $pdo->prepare($sql); // J'obtient un objet qui contient les resultat. 
    //prepare pour dire au moteur sql de dire attention on vas s'appreter a faire une requete.

    $result->execute(['authorId' => $id]);

    //var_dump($result); //  Contient un objet de type PDOStatement qui contient notre requete sql, il est iterable.

    // On vas recuperer et afficher les resultat :
    echo "<ul>";
    foreach ($result as $row) {
        echo "<li> " . $row['title'];
    }
    echo "</ul>";
}

$pdo = null;
