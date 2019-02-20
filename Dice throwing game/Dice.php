<?php

class Dice{

    public $sides = 6;
    public $color = null;
    public $value = null;

    public function __construct()
    {
        
    }

    public function roll()
    {
        $this->value = rand(0,6);
    }

}






?>