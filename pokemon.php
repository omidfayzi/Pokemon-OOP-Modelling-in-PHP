<?php
// Pokemon.php
class Pokemon
{
    protected $name;
    protected $lifePoints;
    protected $maxLifePoints;
    protected $energyType;
    protected $weakness;
    protected $resistance;
    protected $attacks;

    public function __construct($name, $lifePoints, $energyType, $weakness, $resistance, $attacks)
    {
        $this->name = $name;
        $this->lifePoints = $lifePoints;
        $this->maxLifePoints = $lifePoints;
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
    }

    public function getName() { return $this->name; }
    public function getLifePoints() { return $this->lifePoints; }
    public function getEnergyType() { return $this->energyType->getName(); }
    public function getWeakness() { return $this->weakness->getEnergyType()." ".$this->weakness->getMultiplier(); }
    public function getResistance() { return $this->resistance->getEnergyType()." ".$this->resistance->getValue(); }
    public function getAttacks() { return $this->attacks; }

    public function attack($attack, $target) {
        echo $this->name . " attacked " . $target->getName() . " and dealt " . $attack->getDamage() . " damage <br>";
        $target->takeDamage($attack, $this->energyType);
    }

    public function takeDamage($attack, $energyType) {
        $damage = $attack->getDamage();
        if ($energyType->getName() == $this->weakness->getEnergyType()) {
            $damage *= $this->weakness->getMultiplier();
        }
        if ($energyType->getName() == $this->resistance->getEnergyType()) {
            $damage -= $this->resistance->getValue();
        }
        $this->lifePoints -= $damage;
        if ($this->lifePoints < 0) {
            $this->lifePoints = 0;
        }
        echo $this->name . " has " . $this->lifePoints . " health left <br>";
    }

    public function printStats() {
        $attacksNames = array_map(function($attack) { return $attack->getName() . " " . $attack->getDamage(); }, $this->attacks);
        echo "Name: " . $this->name . "<br>";
        echo "Health: " . $this->lifePoints . "/" . $this->maxLifePoints . "<br>";
        echo "Weakness: " . $this->getWeakness() . "<br>";
        echo "Resistance: " . $this->getResistance() . "<br>";
        echo "Attack(s): " . implode(", ", $attacksNames) . "<br><br>";
    }
}

