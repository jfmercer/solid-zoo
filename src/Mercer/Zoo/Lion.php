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
        return Animal::SPEAK_WORD_DEFAULT;
    }

    public function play()
    {
        if($this->energy < Animal::PLAY_ENERGY_DEFAULT)
            return Animal::TIRED_WORD_DEFAULT;

        $this->energy -= Animal::PLAY_ENERGY_DEFAULT;

        return Animal::PLAY_WORD_DEFAULT;
    }

    public function getEnergy()
    {
        return $this->energy;
    }
}
