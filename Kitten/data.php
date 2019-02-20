<?php

require 'lib/DBBlackbox.php';

// handle the incoming request here

// to save any data to the "database":
// insert($any_data)
// $any_data MUST be an array
var_dump($_POST);

function give_me_post_data($index, $default = ''){
    if (isset($_POST[$index])){
        $data = $_POST[$index];
    } else{
        $data = $default;
    }
    return $data;
}

function print_post_data($index, $default = '')
{
    $raw_data = give_me_post_data($index, $default);
    $encode_data = htmlspecialchars(give_me_post_data($index, $default));
    return $encode_data;

}

$data_to_save = [
    'name' => give_me_post_data('name'),
    'text' => give_me_post_data('text')
];

insert($data_to_save);


/* $name = give_me_post_data('name');
$text = give_me_post_data('text');
$age = give_me_post_data('age', 18);
$sex = give_me_post_data('sex', 'f') */

/* insert(['foo' => 'bar']); */

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
    <label for="Name">Name</label><br>
    <input type="text" name="name" value="<?= print_post_data('name') ?>"><br>

    <label for="Name">Why do you want to adopt...?</label> <br>
    <textarea name="text" id="" cols="30" rows="10"><?=print_post_data('text') ?></textarea>
    <br>
    <br>
    <br>
    <select name="color" id="">
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="blue" <?= give_me_post_data() ?>>Blue</option>
        <option value="green">Green</option>
    
    
    </select>

    <br>
    <br>
    <br>

    <input type="submit" value="submit me!"> <br>
</form>
    
</body>
</html>