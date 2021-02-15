<?php
function insertValue(&$tab, $nb) {
    $tab[$nb] = $nb;
}


$tab = [2,5,8,2,5,6,7];
insertValue($tab, 12);
echo " taille du tableau " . count($tab);
echo "<pre>";
print_r($tab);
echo "</pre>";