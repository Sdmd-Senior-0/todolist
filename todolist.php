<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c56db0b8b4.js" crossorigin="anonymous"></script>
    <title>Todolist</title>
</head>
<body>
    <?php require "db.php"?>
    <form action="addtodo.php" method="POST">
        <input type="text" name="title" id="title" required>
        <input type="text" name="info" id="info" required>
        <input type="submit" value="qo'shish">
    </form>
    <ul>
        <?php while($row = $res->fetch_assoc()): ?>
        <li>
            <a href="./view.php?id=<?= $row["id"]?>"><?= $row["title"] ?></a>
            <div class="actions">
                <a href="./updatetodo.php?id=<?= $row['id']?>" class="fa-solid fa-edit"></a>
                <form action="delete.php" method="post" id="delete">
                    <input type="hidden" style="display: none;" name="delete_id" value="<?= $row['id']?>">
                    <button type="submit" name="delete_btn"></button>
                </form>
            </div>
        </li>
        
        <?php endwhile;?>
    </ul>
    
</body>
</html>