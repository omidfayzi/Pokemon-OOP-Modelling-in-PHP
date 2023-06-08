<?php
require_once 'Pokemon.php';
require_once 'Attack.php';
require_once 'Resistance.php';
require_once 'Weakness.php';
require_once 'EnergyType.php';

class Charmeleon extends Pokemon {
    public function __construct($name)
    {
        $energyType = new EnergyType(EnergyType::FIRE);
        $hitPoints = 60;
        $attacks = [
            new Attack('Head Butt', 10),
            new Attack('Flare', 30),
        ];
        $weakness = new Weakness(EnergyType::WATER, 2);
        $resistance = new Resistance(EnergyType::LIGHTNING, 10);

        parent::__construct($name, $hitPoints, $energyType, $weakness, $resistance, $attacks);
    }
}
?>
