<?php

function oddCmp($input) 
{ 
    return ($input & 1); 
} 

function evenCmp($input) 
    { 
        return !($input & 1); 
    } 

 function separeTab(&$tab) {
     $tab_pair = array_filter($tab, "oddCmp");
     $tab_impair = array_filter($tab,"evenCmp");
     sort($tab_pair);
     rsort($tab_impair);
     $tab = array_merge($tab_impair,$tab_pair);
 }

 $tab = [1, 2, 3, 4, 7, 8, 9, 10, 23, 24, 31];
 print_r($tab);
 echo "<table border=1>";
 echo "<tr>";
 foreach ($tab as $value) {
 echo "<td>$value</td>";
 };
 echo "</tr> </table> <br>";

separeTab($tab);
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
