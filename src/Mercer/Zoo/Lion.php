<?php

namespace Mercer\Zoo;

class Lion extends Animal
{

    public function eat(Food $food)
    {
        parent::eat($food);
    }

    public function rest()
    {
        parent::rest();
    }

    public function speak()
    {
        return parent::speak();
    }

    public function play()
    {
        return parent::play();
    }

    public function getEnergy()
    {
        return $this->energy;
    }
}
