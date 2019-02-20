<?php

class IcehockeyMaych extends Match
{
    public $nr_of_players = 12;
    public $length = 60;
    public $thirds = ['0:0, 0:0, 0:0']


    public function getThirdScores($third_number)
    {

        return $this->thirds[$third)number-1];
    }
}

