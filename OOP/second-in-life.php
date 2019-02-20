<?php

$date_of_birth = '1988-08-21 12:00:00';

$birth_timestamp = strtodatime($date_of_birth);
$current_timestamp = time();

$my_age =  $current_timestamp - $birth_timestamp;

var_dump($my_age_insec);


?>