<?php

namespace Mercer\Zoo;

class Lion
{
    private $energy;

    private static $number_of_lions = 0;

    public function __construct()
    {
        $this->energy = 0;
        $this::$number_of_lions += 1;
    }

    // Can't test parameter types
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

    public function getNumberOfLions(){
        return $this::$number_of_lions;
    }

    public function __destruct(){
        $this::$number_of_lions -= 1;
    }
}
