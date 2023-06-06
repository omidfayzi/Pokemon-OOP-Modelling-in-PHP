<?php 

require 'Pokemon.php';
require 'Pikachu.php';

$pokemon1 = new Pokemon("john"); 
$pokemon2 = new Pikachu("evelyn"); 

echo $pokemon1;
echo "<br>";
echo $pokemon2;
echo "<br>";

echo 'pokemon1->name has value: ' . $pokemon1->name;
echo "<br>";
echo 'pokemon2->name has value: ' . $pokemon2->name;
echo "<br>";
echo 'pokemon2 has value: ' . print_r($pokemon2);
echo "<br>";

$pokemon1->Attack($pokemon2, 50);

?>