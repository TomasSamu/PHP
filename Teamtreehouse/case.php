<?php
//Available roles: admin, editor, author, subscriber
if (!isset($role)) {
    $role = 'subscriber';
}

//change to switch statement

switch ($role){
  case 'admin':
    echo 'As an admin, you can add, edit, or delete any post.';
    break;
  case 'editor':
    echo 'As an editor, you can add or edit any post, and delete your own posts.';
    break;
  case 'author':
    echo 'As an author, you can add, edit, or delete your own post.';
    break;
    
  default:
    echo "You do not have access to this page. Please contact your administrator.";
}