<?php
$a = 2; $b = 3;

echo " Première manière : <br> ";
echo "a = $a, b = $b<br>";
$tmp = $a;
$a = $b;
$b = $tmp;
echo "a = $a, b = $b<br>";


function swap(&$a,&$b) {
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

echo " Deuxième manière : <br> ";
$a = 2; $b = 3;
echo "a = $a, b = $b<br>";
swap($a, $b);
echo "a = $a, b = $b<br>";