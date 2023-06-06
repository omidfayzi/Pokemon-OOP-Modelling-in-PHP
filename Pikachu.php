<?php

// in Pikachu.php
require 'EnergyType.php';
require 'Resistance.php';
require 'Weakness.php';

class Pikachu extends Pokemon {

    function __construct($newName) {
        parent::__construct($newName); 
        $this->energyType = new EnergyType("Electric");
        $this->attacks = array(new Attack("Electric Ring", 50), new Attack("Pika Punch", 20));
        $this->resistance = new Resistance("Normal", 20);
        $this->weakness = new Weakness("Ground", 2.0);
    }

    // Rest of the Pikachu class...
}




?>