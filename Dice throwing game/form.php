<?php

require_once 'Dice.php';

$number_dices = ($_POST['dices']);
var_dump($_POST['dices']);

for ($i=0; $i < $number_dices; $i++){

    $dice[$i] = new Dice;
    $dice[$i]->roll();
    var_dump($dice[$i]);

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post"> 
<label for="number">Dice number</label>
<input type="text" name="dices">


<br><br>

<input type="submit">


<div class="dice"></div>




</form>
    
</body>
</html>