<?php

class EnergyType {
    private $name;

    const FIRE = 'Fire';
    const WATER = 'Water';
    const ELECTRIC = 'Electric';
    const GRASS = 'Grass';
    const ICE = 'Ice';
    const FIGHTING = 'Fighting';
    const POISON = 'Poison';
    const GROUND = 'Ground';
    const FLYING = 'Flying';
    const PSYCHIC = 'Psychic';
    const BUG = 'Bug';
    const ROCK = 'Rock';
    const GHOST = 'Ghost';
    const DARK = 'Dark';
    const DRAGON = 'Dragon';
    const STEEL = 'Steel';
    const FAIRY = 'Fairy';
    const LIGHTNING = 'Lightning';

    function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
?>
