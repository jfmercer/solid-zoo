<?php

namespace spec\Mercer\Zoo;

use Mercer\Zoo\Fish;
use Mercer\Zoo\Food;
use Mercer\Zoo\Grain;
use Mercer\Zoo\Lion;
use Mercer\Zoo\Steak;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

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

    function it_eats_food(Food $food)
    {
        $this->eat($food);
        $this->getEnergy()->shouldBeEqualTo(3);
    }

    // This test doesn't really serve a purpose, the dependency is on the
    // Food interface, not these concrete types, and that's been tested in
    // the test above.
    function it_eats_all_three_kinds_of_food(Steak $steak, Fish $fish, Grain $grain)
    {
        $this->eat($steak);
        $this->getEnergy()->shouldBeEqualTo(3);
        $this->eat($fish);
        $this->getEnergy()->shouldBeEqualTo(6);
        $this->eat($grain);
        $this->getEnergy()->shouldBeEqualTo(9);
    }

    // eat() doesn't throw an exception when empty. WTF?
    // Is the type-hinting not working?
    //
    // Typehinting is working but internally PHP is throwing an error rather
    // than an exception. Don't bothing trying to test typehints, there's no
    // need.
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
