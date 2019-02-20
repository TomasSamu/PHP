<?php


$name = 'James';
$name .= ' Bond';

$bondInfo = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

echo "My name is ".$bondInfo['last_name'].". ".$bondInfo['first_name']." ".$bondInfo['last_name']; 

echo "One day when I was driving my {$bondInfo['car']} in the Alps {$bondInfo['enemy']} came along and made me a {$bondInfo['relationship_status']}. If only I had my {$bondInfo['gun']} with me!";

$bondInfo['last_case'] = "Spectre";

require_once('MoneyPenny/BondCase.php');


use MoneyPenny\BondCase as BondCase;
$case1 = new BondCase(2015);
$case1->setName('Spectre');
$case1->setEnemy('Ernst Stavro Blofeld');

$case1->addGirl('Estrella');
$case1->addGirl('Lucia Sciarra');
$case1->addGirl('Madeleine Swann');
var_dump($case1);

$case2 = new BondCase(2006);
$case2->setName('Casino Royale');
$case2->setEnemy('Le chiffre');

$case2->addGirl('Vesper Lynd');
$case2->addGirl('Solange Dimitrios');

echo 'On average Bond has met ' . BondCase::getAvgGirlsPerCase() . ' girls per case.';

