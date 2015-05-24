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

    function it_says_grrr_when_speaking()
    {
        $this->speak()->shouldReturn("Grrr");
    }

    function it_says_yeah_when_playing()
    {
        $this->play()->shouldReturn("YE-AH!");
    }

    public function its_initial_energy_is_zero(){
        $this->getEnergy()->shouldBeEqualTo(0);
    }

    public function energy_should_be_an_integer(){
        $this->getInteger()->shouldBeInteger(getEnergy());
    }

    // I couldn't find a way to test the parameter type
    // of eat(Food $food)
    public function it_eats_food(){
        return true;
    }

    public function eating_should_add_3_energy(){
        $this->eat()->getEnergy()->shouldBeEqualTo(3);
    }
}
