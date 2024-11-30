<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            width: 40%;
        }
        form input{
            display: block;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="./updatetodo.php" method="get">
        <input type="text" id="title" name="title">
        <input type="text" id="info" name="info">
        <input type="text" value="<?php (int) $_GET['id'] ?>" name="id"/>
        <input type="submit" value="Edit">
    </form>
    <?php

    require "db.php";

    $conn = new mysqli("127.0.0.1", "root", "", "todolist");

    $getted_title = $_GET['title'];
    $getted_info = $_GET['info'];

    if (isset($getted_title) && isset($getted_info)) {

        $getted_id = $_GET["id"];

        $conn->query("UPDATE todos SET title=\"$getted_title\", info=\"$getted_info\" WHERE id = $getted_id;");

        header('Location: todolist.php');
    }
    ?>
</body>
</html>