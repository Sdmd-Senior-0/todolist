<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = new mysqli("127.0.0.1", "root", "", "todolist");
    $id = $_GET['id'];
    $res_id = $conn->query("SELECT title, info FROM todos WHERE id=\"$id\"");
    while ($view_row = $res_id->fetch_assoc()) {
        $getted_title = $view_row['title'];
        $getted_info = $view_row['info'];
    }
    ?>
    <h1><?= $getted_title ?></h1>
    <p><?= $getted_info ?></p>
    <a href="/todolist.php">Qaytish</a>
</body>
</html>