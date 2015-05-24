<?php

class Lion
{
    protected $energy;

    public function __construct()
    {
        $this->energy = 0;
    }

    public function speak(){
        return "Grrr";
    }

    public function play(){
        return "YE-AH!";
    }

    public function eat(){
        $this->energy += 3;
    }

    public function getEnergy(){
        return $this->energy;
    }
}
