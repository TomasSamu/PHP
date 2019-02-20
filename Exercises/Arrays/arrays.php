<?php
$cars_i_want = [];

/* var_dump ($i); */
array_push($cars_i_want,'Aston Martin');
array_push($cars_i_want,'Bugatti');
array_push($cars_i_want,'Ferrari');
array_push($cars_i_want,'Skoda');
array_push($cars_i_want,'Lada');
array_push($cars_i_want,'Dacia');

var_dump($cars_i_want);
echo "For myself I would buy {$cars_i_want[0]}.";
echo "For my spouse I would buy {$cars_i_want[1]}.";

$cars_i_want[4] = 'Smart';

var_dump($cars_i_want);


$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

 
/* $messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuf...',
    'Stuff is done.'
]; */

$messages = [];

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


<!--***** UNCOMMNENT from HERE -->
<!--     <ul>
    <?php // foreach($cars_i_want as $value) : ?>

    <li> <?php // echo $value; ?> </li>

    <?php // endforeach; ?>

    </ul> -->
<!--***** UNCOMMNENT UNTIL HERE -->



<!--***** UNCOMMNENT from HERE
    <table>

     <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>
    <?php // foreach($vehicles as $key=>$value) : ?>
    <tr>
        <td><?php // echo $key; ?></td>
        <td><?php // echo $value; ?></td>
    </tr>
    <?php // endforeach; ?>
</table> -->
<!--***** UNCOMMNENT UNTIL HERE -->

<ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">

<?php if ($messages) : ?>
<?php foreach ($messages as $value) : ?>
    <li><?php echo $value; ?></li>
<?php endforeach; ?>
<?php endif; ?>
</ul>


</body>
</html>



