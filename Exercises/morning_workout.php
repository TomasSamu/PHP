<?php
$movie_name = 'Arrival';
$ratings = [69, 95, 82];
$ratings = [
    'user1'=> 69,
    'user2'=> 95,
    'user3'=>82
];

function format_rating($rating)
{
    return $rating.' %';
}

/* foreach($ratings as $rating)
{
    echo format_rating($rating);
} */

 /* exercise 10 */
 

 function get_username($user_id)
{
    $user_names = [
        'user1' => 'Bob',
        'user2' => 'Stuart',
        'user3' => 'Kevin'
    ];
    return $user_names[$user_id];
}

foreach($ratings as $user_id => $rating)
{
    echo get_username($user_id)
        .'gave'
        .$movie_name
        .' a rating of '
        . format_rating($rating)
        .'<br>';
}