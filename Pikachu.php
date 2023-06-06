<?php

class Pikachu extends Pokemon {

    function __construct($newName) {
        $this->name = $newName;
        $this->health = 100;
        $this->energyType = "Fire";
    }

    function __toString() {
       return "I am a Pikachu."; 
    }


};


?>