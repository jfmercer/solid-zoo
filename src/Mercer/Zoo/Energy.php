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

    public function gainEnergy($amountGained){
        $this->guardAgainstInvalidArguments($amountGained);

        return new static($this->getEnergyLevel() + $amountGained);
    }

    public function loseEnergy($amountLost){
        $this->guardAgainstInvalidArguments($amountLost);

        if($this->getEnergyLevel() - $amountLost < 0) {
            return new static(0);
        }

        return new static($this->getEnergyLevel() - $amountLost);
    }

    public function getEnergyLevel()
    {
        return $this->energy;
    }

    private function guardAgainstInvalidArguments($energy)
    {
        $options = [
            "min_range" => -1,
            "max_range" => PHP_INT_MAX
        ];
        if (filter_var($energy, FILTER_VALIDATE_INT, [$options]) === false)
            throw new \InvalidArgumentException("Energy must be an integer greater than or equal to 0");
    }
}
