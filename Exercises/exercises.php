<?php

/* $my_name = 'Tomas Samuelis';
$height = 1.8;
var_dump($my_name);
var_dump($height); */

/* FUNCTIONS 1 */

/* headline('something');

function headline($text)
{
   echo "<h1>$text</h1>";
} */

/* FUNCTIONS 2 */

/* echo headline('something');

function headline($text)
{
   return "<h1>$text</h1>";
} */


/* FUNCTIONS 3 */
/* $inches = 12;
inchesToCentimeters($inches);

function inchesToCentimeters($inches)
{
    $cm = 0;
echo $inches * 2.54;

} */


/* FUNCTION 4 */

/* $celsius = 100;

echo celsiusToFarenheit($celsius);

function celsiusToFarenheit($celsius)
{
    return (9/5) * $celsius + 32;
} */

/* CONDITION */

/* $temperature = 36.5;

function isHealthy($temp,$unit)
{
    if ($unit === 'f'){
    
        $temp = ($temp -32) / (9/5);
        echo $temp;
    }
        if ($temp < 37){
            var_dump (true);
        }else{
            var_dump (false);
        };
    }

ishealthy(78,'f'); */

/* TERNARY OPERATOR */

/* $number = 42;
function evenOrOdd($number)
{

    if ($num % 2 == 0 ){
        echo 'even';
    } else {
        echo 'odd';
    }
}

evenOrOdd(31); */

/* CONCATENATION 1 */

/* $weekday = 'Wednesday';
function sayWeekday ($day){
echo "Today is " . $day;
}

sayWeekday($weekday); */

/* CONCATENATION 2 */

/* $year_of_birth = 1988;

function sayBirth ($my_birth_year){

$this_year = date('Y');
$birthday = $this_year - $my_birth_year;

echo "I was born in {$my_birth_year}. This year I celebrate my {$birthday}th birthday.";
}

sayBirth($year_of_birth); */

/* CONDITIONS */
/* $my_height = 180;
function assessHight($my_height){

    if ($my_height < 160){
        echo "small";
    } elseif ($my_height > 160 && $my_height < 180){
        echo "average";
    } else{
        echo "tall";
    }
}

assessHight($my_height); */

/* SWITCH */

/*  function getLanguageUsage($language){

    $language = strtolower($language);

    switch($language){
        case 'php':
        case 'python':
        case 'ruby':

        return 'serverside';
        break;

        case 'javascript':

        return 'clientside';
        break;

        default:

        return 'I dont know';
        break;
    }
}

echo getLanguageUsage('JAVASCRIPT'); */

/* $age = 61;
$gender = 'female';
$employed = false;

if ($age < 30){

}

if ($employed){

}

if ($age > 34 && !$employed){

} 

if (!($age > 18)){
    echo "nieco";
}

if ($age < 12 && $gender ==='female')
{
echo "bla";
}

if ($age >= 18 && !$employed)
{

}

if ($age >= 60 && $gender==='female' && !$employed){
    echo "kokocina";

} */

