<?php

require_once 'config/bootstrap.php';

//  var_dump($_SERVER);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $title=$_POST['title'];
    $body=$_POST['body'];

    $result=Post::create($title, $body);
    if ($result==1){
        header("Location:index.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>

<body>
    <form method="post" action="">
        <h3>Create Post</h3>
        <div><input type="text" name="title" placeholder="title"></div>
        <div><textarea name="body" cols="30" rows="10" placeholder="body"></textarea></div>
        <div><button type="submit">Submit</button></div>

    </form>
</body>

</html>