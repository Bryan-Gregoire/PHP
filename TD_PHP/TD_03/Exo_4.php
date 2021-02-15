<form method="GET">
    <p>
        <label for="month">Entre le mois : </label>
        <input type="text" name="month">
    </p>
    <p>
        <label for="year">Entre l'année : </label>
        <input type="text" name="year">
    </p>

    <input type="submit">
</form>

<?php
require_once "calender_Funct.php";

if (isset($_GET['month']) && isset($_GET['year'])) {
    $mois = $_GET["month"];
    $année = $_GET["year"];

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