<?php

namespace spec\Mercer\Zoo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mercer\Zoo\Energy;

class EnergySpec extends ObjectBehavior
{
    const STARTING_ENERGY = 2;

    function let()
    {
        $this->beConstructedWith(self::STARTING_ENERGY);
    }

    function it_throws_an_exception_when_passed_invalid_parameter()
    {
        $this->shouldThrow(new \InvalidArgumentException("Energy must be an integer greater than or equal to 0"))
            ->during('__construct', ['dog']);
    }

    function it_can_return_its_energy()
    {
        $this->getEnergyLevel()->shouldBeEqualTo(2);
    }

    function it_can_produce_a_gained_energy_value()
    {
        $this->gainEnergy(3)->shouldBeLike(new Energy(self::STARTING_ENERGY + 3));
    }

    function it_can_produce_a_lost_energy_value()
    {
        $this->loseEnergy(1)->shouldBeLike(new Energy(self::STARTING_ENERGY - 1));
    }

    function it_can_returns_energy_of_zero_if_loss_is_greater_than_current()
    {
        $this->loseEnergy(10)->shouldBeLike(new Energy(0));
    }
}
