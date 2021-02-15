<?php
 $fruits = array("Apple", "Banana", "Orange", "Pineapple");
 $i = 0;
 echo " Afficher avec un while : <br>";
 echo "<br>";
 echo "<table border=1>";
 while ( $i < count($fruits) ) {
 	echo "<tr><td>$fruits[$i]</td></tr>";
 	$i++;
 };
 echo "</table> <br>";
?>

 <?php
 $fruits = array("Apple", "Banana", "Orange", "Pineapple");
 $i = 0;
 echo " Afficher avec do while : <br>";
 echo "<table border=1>";
 do  {
 	echo "<tr><td>$fruits[$i]</td></tr>";
	$i++;
 } while ($i < count($fruits));
 echo "</table> <br>";
?>

<?php
 $fruits = array("Apple", "Banana", "Orange", "Pineapple");

 echo " Afficher avec un for : ";
 echo "<table border=1>";
 for ($i=0; $i < count($fruits); $i++) {
 echo "<tr><td>$fruits[$i]</td></tr>";
 };
 echo "</table> <br>";
?>

<?php
 $fruits = array("Apple", "Banana", "Orange", "Pineapple");
 echo "Afficher avec un foreach : ";
 echo "<table border=1>";
 foreach ($fruits as $value) {
 echo "<tr><td>$value</td></tr>";
 };
 echo "</table> <br>";
?>