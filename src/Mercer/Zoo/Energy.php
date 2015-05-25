<?php

namespace Mercer\Zoo;

class Energy
{
    private $energy;

    public function __construct($energy)
    {
        $this->guardAgainstInvalidArguments($energy);

        $this->energy = $energy;
    }

    public function gain($amount){
        return new static($this->energy + $amount);
    }

    public function lose($amount){
        return new static($this->energy - $amount);
    }

    public function toInteger()
    {
        return $this->energy;
    }

    private function guardAgainstInvalidArguments($energy)
    {
        if ( ! filter_var($energy, FILTER_VALIDATE_INT) || $energy < 0)
            throw new \InvalidArgumentException("Energy must be an integer greater than or equal to 0");
    }
}
