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

    public function gainEnergy($amount){
        $this->guardAgainstInvalidArguments($amount);

        return new static($this->energy + $amount);
    }

    public function loseEnergy($amount){
        $this->guardAgainstInvalidArguments($amount);

        if($this->energy - $amount < 0)
            return new static(0);

        return new static($this->energy - $amount);
    }

    public function toInteger()
    {
        return $this->energy;
    }

    private function guardAgainstInvalidArguments($energy)
    {
        $options = [
            "min_range" => 0,
            "max_range" => PHP_INT_MAX
        ];
        if ( ! filter_var($energy, FILTER_VALIDATE_INT, [$options]))
            throw new \InvalidArgumentException("Energy must be an integer greater than or equal to 0");
    }
}
