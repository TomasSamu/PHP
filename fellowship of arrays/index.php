<?php
require 'fellowship.php';

$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];


 $party['gandalf'] = 'Gandalf the grey';

 unset($party['bilbo']);

$party['sam'] = 'Samwise Gamgee';
unset($party['gandalf']);

 function leave_hobbiton(){

    global $party;
    $party = array_merge($party, [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
}

leave_hobbiton();

function go_to_bree($bla){
    $bla['strider'] = 'Strider';  
    return $bla;  
}

 $party = go_to_bree($party);

 function go_to_weathertop(&$party){
    $party = array_merge($party,[
            'Witch King of Angmar',
            'Nazgûl #2',
            'Nazgûl #3',
            'Nazgûl #4',
            'Nazgûl #5',
            'Nazgûl #6',
            'Nazgûl #7',
            'Nazgûl #8',
            'Nazgûl #9'
        ]);
}

go_to_weathertop($party);

function meet_arwen(){
    global $party;
    $party = array_merge($party, ['arwen' => 'Arwen Undómiel']);
 
     array_splice($party, -10, 9);

}

meet_arwen();

function go_to_rivendell($party){

    unset($party['arwen']);

    $party = array_merge($party, [
        'gandalf' => 'Gandalf the Grey',
        'boromir' => 'Boromir',
        'legolas' => 'Legolas',
        'gimli' => 'Gimli'
    ]);
$party['strider'] = 'Aragorn';

    return $party;
}

$party = go_to_rivendell($party);


function go_to_moria($party){

    unset($party['gandalf']);
    return $party;
}

go_to_moria($party);
$party = go_to_moria($party);


function go_to_falls_of_rauros($party)
{
    $party = array_merge($party, array_fill(0, 1000, 'Orc'));
    unset($party['boromir']);
    return $party;

}

$party = go_to_falls_of_rauros($party);

 function break_fellowship($party)
{

$mordor_party = [];
array_push($mordor_party, 'frodo', 'sam','ring');

$hunting_party = [];
array_push($hunting_party, 'strider', 'legolas', 'gimli');

$hungry_party = [];
$hungry_party = array_diff_key($party, $mordor_party, $hunting_party);

/* var_dump($party); */
/* var_dump($hungry_party); */
}

break_fellowship($party);

function array_diff($arr_1)
{

    $arr_2 = ['a', 'b', 'c'];
    $arr_3 = ['a'];
    $arr_1 = array_diff_key($arr_1, $arr_2, $arr_3);
    var_dump($arr_1);
}

$arr_1 = ['a', 'b', 'c', 'd'];
array_diff($arr_1);



/* present_party($party); */
?>