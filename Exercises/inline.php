<?php
    $user_admin = false;

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
    

<ul class="menu">
    <li>Home</li>
    <li>Contact</li>
    <li>Shows</li>

<?php if($user_admin) : ?>
    <li>To be seen by admin</li>
    <li>To be seen by admin</li>
<?php endif; ?>
</ul>

</body>
</html>