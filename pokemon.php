<?php

class Pokemon
{
    public static $numberOfPokemons = 0;
    public $name;
    public $energyType;
    public $hitPoints;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$numberOfPokemons++;
    }

    public function Attack($target, $attack) 
    {
        $damage = $attack->getDamage();

        // Check if target is weak against attacker's type
        if($this->energyType->type === $target->weakness->energyType->type)
        {
            $damage *= $target->weakness->multiplier;
        }
        // Check if target has resistance against attacker's type
        else if($this->energyType->type === $target->resistance->energyType->type)
        {
            $damage -= $target->resistance->value;
            $damage = ($damage < 0) ? 0 : $damage; // Prevents negative damage
        }

        $target->hitPoints -= $damage;

        echo "{$this->name} attacked {$target->name} with {$attack->name} and dealt {$damage} damage.<br>";
        
        if($target->hitPoints <= 0) 
        {
            echo "{$target->name} is knocked out.<br>";
            self::$numberOfPokemons--;
        }
        else
        {
            echo "{$target->name} has {$target->hitPoints} health left.<br>";
        }
    }

    public static function getAlivePokemons()
    {
        return self::$numberOfPokemons;
    }
}
