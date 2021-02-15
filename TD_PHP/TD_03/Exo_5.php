<form method="GET">
    <p>
        <label for="name">nom : </label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="prenom">prénom : </label>
        <input type="text" name="prenom">
    </p>
    <p>
        <label for="date">Date de naissance : </label>
        <input type="date" name="date">
    </p>

    <input type="submit">
</form>

<?php
require_once "calender_Funct.php";
if (isset($_GET['prenom'])) {
    echo "Bonjour " . $_GET['prenom'] . " ";
}
if (isset($_GET['name'])) {
    echo  $_GET['name'];
}
echo "<p></p>";


if (isset($_GET['date'])) {

    $varDate = $_GET['date'];
    $varDate = date_parse_from_format("Y-m-d", $varDate);

    if ($varDate["month"] == date("m") && $varDate["day"] == date("d")) {
        echo "Bonne anniversaire ma biche <br>";
    }

    $mois = $varDate["month"];
    $année = $varDate["year"];


    echo "<table>";
    afficherTitre($mois, $année);
    afficherEntête($mois, $année);
    $nbJours = nombreJours($mois, $année);
    $décalage = numéroJour($nbJours, $mois, $année);
    afficherMois($décalage, $nbJours);
    echo "</table>";
}

?>





<style>
    table,
    th,
    td {
        border: 3px solid red;
        color: white;
        font-style: italic;
        font-weight: bold;
        font-variant: small-caps;
        font-size: 25px;
    }

    table {
        background-color: black;
        width: 30%;
        text-align: center;
    }
</style>