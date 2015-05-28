<?php

namespace Mercer\Zoo;

class Lion implements Animal
{
    private $energy;

    public function __construct()
    {
        $this->energy = 0;
    }

    public function eat(Food $food)
    {
        $this->energy += Animal::EAT_ENERGY_DEFAULT;
    }

    public function rest()
    {
        $this->energy += Animal::REST_ENERGY_DEFAULT;
    }

    public function speak()
    {
        return "Grrr";
    }

    public function play()
    {
        if($this->energy < Animal::PLAY_ENERGY_DEFAULT)
            return "I'm tired";

        $this->energy -= Animal::PLAY_ENERGY_DEFAULT;

        return "YE-AH!";
    }

    public function getEnergy()
    {
        return $this->energy;
    }
}
