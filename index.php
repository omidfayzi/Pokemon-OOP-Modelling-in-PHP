<?php 

// in index.php
$pokemon1 = new Pokemon("john"); 
echo 'pokemon1 energy type: ' . $pokemon1->energyType->name;
echo "<br>";
echo 'pokemon1 resistance: ' . $pokemon1->resistance->energyType . ' ' . $pokemon1->resistance->value;
echo "<br>";
echo 'pokemon1 weakness: ' . $pokemon1->weakness->energyType . ' ' . $pokemon1->weakness->multiplier;
echo "<br>";

$pokemon2 = new Pikachu("evelyn"); 
echo 'pokemon2 energy type: ' . $pokemon2->energyType->name;
echo "<br>";
echo 'pokemon2 resistance: ' . $pokemon2->resistance->energyType . ' ' . $pokemon2->resistance->value;
echo "<br>";
echo 'pokemon2 weakness: ' . $pokemon2->weakness->energyType . ' ' . $pokemon2->weakness->multiplier;
echo "<br>";



?>