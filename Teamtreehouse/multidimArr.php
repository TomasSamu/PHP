<?php
//edit this array
$contacts = array(array('name' => 'Alena Holligan', 'email' => 'alena.holligan@teamtreehouse.com'),
                  array('name' =>'Dave McFarland', 'email' => 'dave.mcfarland@teamtreehouse.com'),
                  array('name' =>'Treasure Porth', 'email' => 'treasure.porth@teamtreehouse.com'),
                  array('name' =>'Andrew Chalkley', 'email' => 'andrew.chalkley@teamtreehouse.com'));

echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>{$contacts[0]['name']} : {$contacts[0]['email']}</li>\n";
echo "<li>{$contacts[1]['name']} : {$contacts[1]['email']}</li>\n";
echo "<li>{$contacts[2]['name']} : {$contacts[2]['email']}</li>\n";
echo "<li>{$contacts[3]['name']} : {$contacts[3]['email']}</li>\n";
echo "</ul>\n";


?>

<?php foreach($contacts as $values) : ?>
    <li> <?= $values['name']; ?> : <?= $values['email']; ?></li>
<?php endforeach; ?>
