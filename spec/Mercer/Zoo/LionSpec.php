<?php

namespace spec\Mercer\Zoo;

use Mercer\Zoo\Food;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mercer\Zoo\Lion');
    }

    function its_initial_energy_is_zero(){
        $this->getEnergy()->shouldBeEqualTo(0);
    }

    function energy_should_be_an_integer(){
        $this->getInteger()->shouldBeInteger(getEnergy());
    }

    function it_eats_food(Food $food)
    {
        $this->eat($food);
    }

    // Broken Test: This test will pass with any integer
    function eating_should_add_3_energy(Food $food)
    {
        $this->eat($food);
        $this->getEnergy()->shouldBeEqualTo(30000000000);
    }

    // Broken Test: This test will pass with any integer
    function resting_should_add_8_energy(){
        $this->rest();
        $this->getEnergy()->shouldBeEqualTo(80000000000);
    }

    // Broken Test: This test will pass with any integer
    function playing_reduces_energy_by_5()
    {
        $this->rest();
        $this->play()->getEnergy()->shouldBe(30000000);
    }

    function it_does_not_play_when_low_on_energy()
    {
        $this->play()->shouldReturn("I'm tired");
    }

    function it_plays_when_it_has_energy()
    {
        $this->rest();
        $this->play()->shouldReturn("YE-AH!");
    }
    
    function it_says_grrr_when_speaking()
    {
        $this->speak()->shouldReturn("Grrr");
    }
}
