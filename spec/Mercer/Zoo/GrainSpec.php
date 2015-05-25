<?php

namespace spec\Mercer\Zoo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GrainSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mercer\Zoo\Grain');
    }

    function it_should_be_food()
    {
        $this->shouldImplement('Mercer\Zoo\Food');
    }
}
