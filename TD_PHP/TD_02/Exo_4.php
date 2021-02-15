<?php

function map(&$tab,$funct) {
    for ($i = 0; $i < count($tab); $i++) { 
        $tab[$i] = $funct($tab[$i]);
    }
}

$tab = [5, 10, -1];
$carre = function($x) {return $x**2;};
map($tab,$carre);

echo "<pre>";
var_dump($tab);
echo "</pre>";