<?php

class Pokemon {
    private static $pokemonCount = 0;

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
        self::$pokemonCount++;
    }

    public function attack($target, $attack) {
        $damage = $attack->damage;

        if ($target->weakness->energyType == $this->energyType) {
            $damage *= $target->weakness->multiplier;
        }

        if ($target->resistance->energyType == $this->energyType) {
            $damage -= $target->resistance->value;
        }

        $target->hitPoints = max(0, $target->hitPoints - $damage);
        echo "{$this->name} attacked {$target->name} with {$attack->name} and dealt {$damage} damage.<br>";
        echo "{$target->name} has {$target->hitPoints} health left.<br><br>";
    }

    public static function alivePokemons($pokemons) {
        $aliveCount = 0;
        foreach($pokemons as $pokemon) {
            if($pokemon->hitPoints > 0) {
                $aliveCount++;
            }
        }
        return $aliveCount;
    }
}
?>
