<?php

require 'Pokemon.php';

function printPokemonStats($pokemon)
{
    echo "Name: " . $pokemon->name . "<br>";
    echo "Health: " . $pokemon->health . "/" . $pokemon->hitpoints . "<br>";
    echo "Weakness: " . $pokemon->weakness->energyType . " " . $pokemon->weakness->multiplier . "<br>";
    echo "Resistance: " . $pokemon->resistance->energyType . " " . $pokemon->resistance->value . "<br>";
    echo "Attack(s): ";
    foreach ($pokemon->attacks as $attack)
    {
        echo $attack->name . " " . $attack->damage . ", ";
    }
    echo "<br><br>";
}

$pikachu = new Pokemon("Pikachu", "Lightning", 60,
    [new Attack("Electric Ring", 50), new Attack("Pika Punch", 20)],
    new Weakness("Fire", 1.5), new Resistance("Fighting", 20)
);
$charmeleon = new Pokemon("Charmeleon", "Fire", 60,
    [new Attack("Head Butt", 10), new Attack("Flare", 30)],
    new Weakness("Water", 2), new Resistance("Lightning", 10)
);

printPokemonStats($pikachu);
printPokemonStats($charmeleon);

$pikachu->attack($charmeleon, $pikachu->attacks[0]);
echo "Pikachu attacked Charmeleon and dealt " . $pikachu->attacks[0]->damage . " damage<br>";
echo "Charmeleon has " . $charmeleon->health . " health left<br><br>";

$charmeleon->attack($pikachu, $charmeleon->attacks[0]);
echo "Charmeleon attacked Pikachu and dealt " . $charmeleon->attacks[0]->damage . " damage<br>";
echo "Pikachu has " . $pikachu->health . " health left<br><br>";

echo "Number of pokemons alive: " . Pokemon::getPopulation();

?>
