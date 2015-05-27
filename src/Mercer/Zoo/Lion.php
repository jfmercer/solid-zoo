<?php

namespace Mercer\Zoo;

class Lion
{
    private $energy;

    public function __construct()
    {
        $this->energy = 0;
    }

    // Can't test parameter types
    public function eat(Food $food)
    {
        $this->energy += 3;
    }

    public function rest()
    {
        echo "\n\n Energy: " . $this->getEnergy() . " \n\n";
        $this->energy += 8;
        echo "\n\n Energy: " . $this->getEnergy() . " \n\n";
    }

    public function speak()
    {
        return "Grrr";
    }

    public function play()
    {
        if($this->energy < 5)
            return "I'm tired";

        $this->energy -= 5;

        return "YE-AH!";
    }

    public function getEnergy(){
        return $this->energy;
    }

}
