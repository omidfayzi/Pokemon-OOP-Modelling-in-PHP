<?php 

// in Pokemon.php
require 'EnergyType.php';
require 'Resistance.php';
require 'Weakness.php';

class Pokemon {
    public $name; 
    public $health;
    public $energyType;
    public $attacks; 
    public $resistance;
    public $weakness;

    function __construct($newName) { 
        $this->name = $newName; 
        $this->health = 100;
        $this->energyType = new EnergyType("Normal");
        $this->attacks = array(new Attack("Default Attack 1", 10), new Attack("Default Attack 2", 20)); 
        $this->resistance = new Resistance("Normal", 20);
        $this->weakness = new Weakness("Fire", 2.0);
    }

    // Rest of the Pokemon class...
}



?>