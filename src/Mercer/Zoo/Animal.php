<?php

namespace Mercer\Zoo;

interface Animal {

    const EAT_ENERGY_DEFAULT = 3;
    const REST_ENERGY_DEFAULT = 8;
    const PLAY_ENERGY_DEFAULT = 5;

    public function eat(Food $food);
    public function rest();
    public function speak();
    public function play();
}
