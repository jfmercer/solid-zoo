<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FishSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fish');
    }

    function it_should_be_food()
    {
        $this->shouldImplement('Food');
    }
}
