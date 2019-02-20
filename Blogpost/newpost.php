<?php

require_once 'blogpost.php';


$all_posts =[];
$total_posts = 0;
$first_post = new Blogpost(1, 'The first post');

$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->added_at = date('Y-m-d H:i:s');
$first_post->user_id = 1;
$first_post->status = 'published';

$second_post = new Blogpost(2,'This is my second post');
$second_post->publish();


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

<?php foreach ($all_posts as $values) : ?>

    <div><?= $values; ?></div>

<?php endforeach; ?>
    
</body>
</html>