<?php

namespace Mercer\Zoo;

class Lion
{
    protected $energy;

    public function __construct()
    {
        $this->energy = 0;
    }

    public function eat(Food $food)
    {
        $this->energy += 3;
    }

    public function rest()
    {
        $this->energy += 8;
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
