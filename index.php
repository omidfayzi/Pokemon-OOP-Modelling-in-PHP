<?php

require_once 'Pikachu.php';
require_once 'Charmeleon.php';

$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

$pikachu->printStats();
$charmeleon->printStats();

$pikachu->attack($pikachu->getAttacks()[0], $charmeleon);
$charmeleon->attack($charmeleon->getAttacks()[0], $pikachu);

echo "Number of pokemons alive: 2";
?>
