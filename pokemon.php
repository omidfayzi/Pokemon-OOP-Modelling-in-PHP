<?php

class Pokemon {
    public $name;       // for example: John
    public $health;     // for example: 100
    public $energyType;  

    function __construct($newName) {
        $this->name = $newName;
        $this->health = 100;
    }

    function Attack($targetObject, $attackAmount) {
        $targetName = $targetObject->name;
        echo "<br>";
        echo $this->name . " attacks " . $targetName . " (health:" . $targetObject->health. ")";
        echo "<br>";
        $targetObject->health = $targetObject->health - $attackAmount;
        echo $targetName . " health is now: " . $targetObject->health;
        
    }

    function __toString() {
        return "I am a Pokemon."; 
     }


};


?>