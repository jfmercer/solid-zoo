<?php

namespace spec\Mercer\Zoo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SteakSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mercer\Zoo\Steak');
    }

    function it_should_be_food()
    {
        $this->shouldImplement('Mercer\Zoo\Food');
    }
}
