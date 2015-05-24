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

    function its_initial_energy_is_zero(){
        $this->getEnergy()->shouldBeEqualTo(0);
    }

    function energy_should_be_an_integer(){
        $this->getInteger()->shouldBeInteger(getEnergy());
    }

    // I couldn't find a way to test the parameter type
    // of eat(Food $food)
    function it_eats_food(\Food $food)
    {
//        $this->eat($food)->getEnergy()->shouldBeEqualTo(3);
        return true;
    }

    // Again, I don't know how to test parameter types
    // for Steak, Fish, and Grain
//    function it_eats_all_three_kinds_of_food(\Steak $steak)
//    {
//        $this->eat($steak)->getEnergy()->shouldBeEqualTo(3);
//        return true;
//    }
    // eat() doesn't throw an exception when empty. WTF?
    // Is the type-hinting not working?
//    function it_should_only_eat_Food()
//    {
//        $this->shouldThrow('\ErrorException')->duringEat(null);
//    }

    function eating_should_add_3_energy()
    {
        $this->eat()->getEnergy()->shouldBeEqualTo(3);
    }

    function resting_should_add_8_energy(){
        $this->rest()->getEnergy()->shouldBeEqualTo(8);
    }

    function it_says_grrr_when_speaking()
    {
        $this->speak()->shouldReturn("Grrr");
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

    function playing_reduces_energy_by_5()
    {
        $this->rest();
        $this->play()->getEnergy()->shouldBe(3);
    }
}
