<?php

require 'lib/DBBlackbox.php';

// handle the incoming request here

// to save any data to the "database":
// insert($any_data)
// $any_data MUST be an array

//var_dump(select());
/* var_dump($_POST); */

/* function give_me_post_data(){
    if (isset($_POST))


} */

/* insert(['foo' => 'bar']); */

$name = $_POST['song_name'];
var_dump($name);

function give_post_data($index, $default = ''){
    if (isset($_POST['song_name'])){
        $data = $_POST['song_name'];
    } else{
        $data = $default;
    }
    return $data;
}


function print_post_data($index, $default =''){

    $raw_data = give_post_data($index, $default='');
    $clean_data = htmlspecialchars($raw_data);
    return $clean_data; 
}


$data_to_save = [
    'name' => give_post_data('name'),
    'text' => give_post_data('text')
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms exercise</title>
</head>
<body>

    <form action="" method="post">

    <label for="name">Song name:</label><br>
    <input type="text" name="song_name" value ="<?=print_post_data('song_name'); ?>">
    <br>
    <br>
    <br>

    <label for="name">Interpret:</label><br>
    <input type="text" name="band_name" value ="">
    <br>
    <br>
    <br>

    <label for="rock">Rock</label>
    <input type="radio" name="genre" value="rock" id="rock"></input>
    <label for="pop">Pop</label>
    <input type="radio" name="genre" value="pop" id="pop"></input>
    <label for="country">Country</label>
    <input type="radio" name="genre" value="country" id="country"></input>
    <label for="electro">Electro</label>
    <input type="radio" name="genre" value="electro" id="electro"></input>

    <br>
    <br>

    <label for="solo"> Solo</label>
    <input type="checkbox" name="solo" id="solo" value="1">
    <label for="band">Band</label>
    <input type="checkbox" name="band" id="band" value="2">

    <br>
    <br>


    <input type="submit" value="submit me!"> <br>

</form>
    <!-- create your form here -->
    
</body>
</html>