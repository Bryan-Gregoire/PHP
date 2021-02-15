<?php

function insererMultiple(&$tab, $pos, $val, $nb) {
    $tab_values = array_fill($pos,$nb,$val);   
    array_splice($tab,$pos,0,$tab_values);
}

//Affichage du tableau au début.
$tab = [4,7,6];
echo "<table border=1>";
echo "<tr>";
foreach ($tab as $value) {
echo "<td>$value</td>";
};
echo "</tr> </table> <br>";

//Inserer 3 fois la valeur 8 a la position 1.
insererMultiple($tab,1,8,3);

//Afficher le tableau apres l'appel de la fonction.
echo "<table border=1>";
echo "<tr>";
foreach ($tab as $value) {
echo "<td>$value</td>";
};
echo "</tr> </table> <br>";
?>


<style>
table, td {
  font-style: italic;
  font-weight: bold;
  font-variant: small-caps;
  font-size: 25px;
  padding: 35px;
}
table {
    width: 30%;
    text-align: center;
}
</style>
