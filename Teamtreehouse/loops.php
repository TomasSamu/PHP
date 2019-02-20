<?php

$flavors = array();
$flavors[] = array("name" => "Cookie Dough",      "in_stock" => true);
$flavors[] = array("name" => "Vanilla",           "in_stock" => false);
$flavors[] = array("name" => "Avocado Chocolate", "in_stock" => false);
$flavors[] = array("name" => "Bacon Me Crazy",    "in_stock" => true);
$flavors[] = array("name" => "Strawberry",        "in_stock" => false);

var_dump(array_keys($flavors[0]));

foreach($flavors as $values)
{
    if ($values['in_stock']){
        echo $values['name'];
    }
}