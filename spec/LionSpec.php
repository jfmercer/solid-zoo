<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lion');
    }

    function it_says_grrr()
    {
        $this->speak()->shouldReturn("Grrr");
    }
}
