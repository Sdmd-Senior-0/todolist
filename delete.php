<?php
$id = $_POST['delete_id'];
$conn = new mysqli("127.0.0.1", "root", "", "todolist");
if (isset($_POST['delete_btn'])) {
    $isSuc = $conn->query("DELETE FROM todos WHERE id='$id'");
    if ($isSuc === TRUE) {
        header("Location: todolist.php");
    } else {
        echo "<a href='todolist.php'>Topilmadi</a>";
    }
}

?>
