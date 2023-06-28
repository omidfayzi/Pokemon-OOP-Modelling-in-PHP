<?php

require_once 'Pokemon.php';
require_once 'Attack.php';
require_once 'Weakness.php';
require_once 'Resistance.php';
require_once 'EnergyType.php';

$pikachu = new Pokemon(
    'Pikachu',
    new EnergyType('Lightning'),
    60,
    [
        new Attack('Electric Ring', 50),
        new Attack('Pika Punch', 20)
    ],
    new Weakness(new EnergyType('Fire'), 1.5),
    new Resistance(new EnergyType('Fighting'), 20)
);

$charmeleon = new Pokemon(
    'Charmeleon',
    new EnergyType('Fire'),
    60,
    [
        new Attack('Head Butt', 10),
        new Attack('Flare', 30)
    ],
    new Weakness(new EnergyType('Water'), 2),
    new Resistance(new EnergyType('Lightning'), 10)
);

$pokemons = [$pikachu, $charmeleon];

foreach ($pokemons as $pokemon) {
    echo "Name: {$pokemon->name}<br>";
    echo "Health: {$pokemon->hitPoints}/60<br>";
    echo "Weakness: {$pokemon->weakness->energyType->type} {$pokemon->weakness->multiplier}<br>";
    echo "Resistance: {$pokemon->resistance->energyType->type} {$pokemon->resistance->value}<br>";
    echo "Attack(s): ";
    foreach ($pokemon->attacks as $attack) {
        echo "{$attack->name} {$attack->damage}, ";
    }
    echo "<br><br>";
}

$pikachuAttack = $pikachu->attacks[0]; // Choosing Electric Ring attack
$charmeleonAttack = $charmeleon->attacks[0]; // Choosing Head Butt attack

$pikachu->Attack($charmeleon, $pikachuAttack);
$charmeleon->Attack($pikachu, $charmeleonAttack);

echo "<br>Number of pokemons alive: " . Pokemon::getAlivePokemons();

?>
