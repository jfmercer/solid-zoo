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

    public static function gainEnergy($amountGained){
        self::guardAgainstInvalidArguments($amountGained);

        return new static(self::getEnergyLevel() + $amountGained);
    }

    public static function loseEnergy($amountLost){
        self::guardAgainstInvalidArguments($amountLost);

        if(self::getEnergyLevel() - $amountLost < 0)
            return new static(0);

        return new static(self::getEnergyLevel() - $amountLost);
    }

    public function getEnergyLevel()
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
