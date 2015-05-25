<?php

namespace spec\Mercer\Zoo;

use Mercer\Zoo\Fish;
use Mercer\Zoo\Grain;
use Mercer\Zoo\Steak;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mercer\Zoo\Lion;

class LionSpec extends ObjectBehavior
{
    function it_should_add_one_lion_when_constructed()
    {
        $this->getNumberOfLions()->shouldBe(1);
    }

    // Another method I can't test
//    function it_should_delete_one_lion_when_destroyed()
//    {
//        unset($this);
//        $this->getNumberOfLions()->shouldBe(1);
//    }

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

    // I couldn't find a way to test the parameter type
    // of eat(Food $food)
//    function it_eats_food(Food $food)
//    {
//        $this->eat($food)->getEnergy()->shouldBeEqualTo(3);
//    }

    // Again, I don't know how to test parameter types
    // for Steak, Fish, and Grain
//    function it_eats_all_three_kinds_of_food(Steak $steak, Fish $fish, Grain $grain)
//    {
//        $this->eat($steak)->getEnergy()->shouldBeEqualTo(3);
//        $this->eat($fish)->getEnergy()->shouldBeEqualTo(6);
//        $this->eat($grain)->getEnergy()->shouldBeEqualTo(9);
//    }
    // eat() doesn't throw an exception when empty. WTF?
    // Is the type-hinting not working?
//    function it_should_only_eat_Food()
//    {
//        $this->shouldThrow('\InvalidArgumentException')->duringEat(null);
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
