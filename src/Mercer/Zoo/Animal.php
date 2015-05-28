<?php

namespace Mercer\Zoo;

abstract class Animal {

    const EAT_ENERGY_DEFAULT = 3;
    const REST_ENERGY_DEFAULT = 8;
    const PLAY_ENERGY_DEFAULT = 5;
    const SPEAK_WORD_DEFAULT = "Grrr";
    const TIRED_WORD_DEFAULT = "I'm tired";
    const PLAY_WORD_DEFAULT = "YE-AH!";

    protected $energy;

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
}
