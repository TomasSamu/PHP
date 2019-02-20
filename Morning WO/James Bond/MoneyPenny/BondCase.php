<?php

namespace MoneyPenny;

class BondCase
{
    protected $name = null;
    protected $year = null;
    protected $enemy = null;

    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    protected $girls = [];

public function __construct($year)
{
    $this->year = $year;
    static::$cases_solved++;
}

public function setName($value)
{
    $this->name = $value;
}

public function setYear($value)
{
    $this->name = $value;
}

public function setEnemy($value)
{
    $this->name = $value;
}

public function getName()
{
    return $this->name;
}

public function getYear()
{
    return $this->name;
}

public function getEnemy()
{
    return $this->name;
}

public function addGirl($name)
{
    $this->girls[] = $name;
    static::$girls_met++;
}

public function getAvgGirlsPerCase()
{
    return static::$girls_met / static::$cases_solved;
}


}