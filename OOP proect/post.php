<?php

require_once 'config/bootstrap.php';

$post_id = $_GET['id'];
$post=Post::getById($post_id);

// var_dump($post);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post <?=$post_id?> </title>
</head>

<body>
    <div>
        <h1> <?=$post->id . '. ' . $post->title?> </h1>
        <p> <?=$post->body?> </p>
        <small> <?=$post->created_at?> </small>
    </div>

</body>

</html>