<?php
require_once('Pokemon.php');
require_once('EnergyType.php');
require_once('Attack.php');
require_once('Resistance.php');
require_once('Weakness.php');

class Charmeleon extends Pokemon {

    public function __construct($name)
    {
        parent::__construct(
            $name,
            new EnergyType('Fire'),
            60,
            [
                new Attack('Head Butt', 10), 
                new Attack('Flare', 30)
            ],
            new Weakness(new EnergyType('Water'), 2),
            new Resistance(new EnergyType('Lightning'), 10)
        );
    }
}
?>
