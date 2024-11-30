<?php
$conn = new mysqli("127.0.0.1", "root", "", "todolist");
    $todo_title = $_POST["title"];
    $todo_info = $_POST["info"];
    $conn->query("INSERT INTO todos(title, info) VALUES('$todo_title', '$todo_info')");
    header("Location: todolist.php")
?>