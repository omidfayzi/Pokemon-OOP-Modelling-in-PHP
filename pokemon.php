<?php

class Pokemon
{
    public static $population = 0;
    public static $livingPokemon = [];
    public $name;
    public $energyType;
    public $hitpoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        Pokemon::$population += 1;
        array_push(Pokemon::$livingPokemon, $this);
    }

    public function attack($target, $attack)
    {
        $damage = $attack->damage;
        if ($target->weakness->energyType == $this->energyType)
        {
            $damage *= $target->weakness->multiplier;
        }
        if ($target->resistance->energyType == $this->energyType)
        {
            $damage -= $target->resistance->value;
        }
        $target->health -= $damage;
        if ($target->health <= 0)
        {
            Pokemon::$population -= 1;
        }
    }

    public static function getPopulation()
    {
        return Pokemon::$population;
    }
}

class Attack
{
    public $name;
    public $damage;

    public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }
}

class Weakness
{
    public $energyType;
    public $multiplier;

    public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }
}

class Resistance
{
    public $energyType;
    public $value;

    public function __construct($energyType, $value)
    {
        $this->energyType = $energyType;
        $this->value = $value;
    }
}
?>
