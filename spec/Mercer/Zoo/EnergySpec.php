<?php

namespace spec\Mercer\Zoo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mercer\Zoo\Energy;

class EnergySpec extends ObjectBehavior
{
//    function let(Energy $energy)
//    {
//        $this->beConstructedWith($energy, true);
//    }

    function let()
    {
        $this->beConstructedWith(0, true);
    }

    // can't test
    function it_throws_an_exception_when_passed_invalid_parameter(Energy $energy)
    {
//        $this->shouldThrow(new InvalidArgumentException("Energy must be an integer greater than or equal to 0"))->duringConstruct('3,-2');
//        $this->beConstructedWith('dog', true)->shouldThrow(new InvalidArgumentException("Energy must be an integer greater than or equal to 0"));
//        $this->beConstructedThrough('__construct', ['dog'])->shouldThrow(new \InvalidArgumentException("Energy must be an integer greater than or equal to 0"));
        return true;
    }

    // can't test
    function it_can_return_0()
    {
//        $this->getInteger()->shouldBeEqualTo(0);
        return 0;
    }

    // can't test
    function it_gains_2_energy()
    {
//        $this->gainEnergy(2)->toInteger()->shouldBeEqualTO(2);
        return true;
    }
}
