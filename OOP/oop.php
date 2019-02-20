<?php
require_once 'User.php';

$total_user = 0;

$steve = new User('steve');

$steve->id = 1;
$steve-> name = 'Stephen';

echo "The name of user {$steve->id} is {$steve->name}";

$bob = new User('bob');
$bob->name = 'Robert';

$steve->dumpMe();
$bob->dumpMe();

unset($steve);
unset($bob);
var_dump($total_users);





?>
