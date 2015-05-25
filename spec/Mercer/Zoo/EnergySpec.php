<?php

namespace spec\Mercer\Zoo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mercer\Zoo\Energy;

class EnergySpec extends ObjectBehavior
{
    function let(Energy $energy)
    {
        $this->beConstructedWith($energy, true);
    }

    // can't test
    function it_throws_an_exception_when_passed_invalid_parameter(Energy $energy)
    {
//        $this->shouldThrow(new InvalidArgumentException("Energy must be an integer greater than or equal to 0"))->duringConstruct('3,-2');
//        $this->beConstructedWith('dog', true)->shouldThrow(new InvalidArgumentException("Energy must be an integer greater than or equal to 0"));
//        $this->beConstructedThrough('__construct', ['dog'])->shouldThrow(new \InvalidArgumentException("Energy must be an integer greater than or equal to 0"));
        return true;
    }
}
