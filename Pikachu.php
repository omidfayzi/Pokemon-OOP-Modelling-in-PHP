<?php
require_once 'Pokemon.php';
require_once 'Attack.php';
require_once 'Resistance.php';
require_once 'Weakness.php';
require_once 'EnergyType.php';

class Pikachu extends Pokemon
{
    public function __construct($name)
    {
        $energyType = new EnergyType(EnergyType::ELECTRIC);
        $weakness = new Weakness(EnergyType::FIRE, 1.5);
        $resistance = new Resistance(EnergyType::FIGHTING, 20);
        $attacks = [
            new Attack('Electric Ring', 50),
            new Attack('Pika Punch', 20),
        ];
        parent::__construct($name, 60, $energyType, $weakness, $resistance, $attacks);
    }
}
?>
