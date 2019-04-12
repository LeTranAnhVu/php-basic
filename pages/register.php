<?php
include '../services/db_connection.php';

$age = null;
$name = null;
if (isset($_POST['submit'])) {
//    age
    if (empty($_POST['age'])) {
        echo 'email is required ' . '<br>';
        header('location: add.php');
    } else {
        echo htmlspecialchars($_POST['age']) . '<br>';
        $age = mysqli_real_escape_string($conn, $_POST['age']);
    }

    if (empty($_POST['name'])) {
        echo 'name is required ' . '<br>';
        header('location: add.php');
    } else {
        echo htmlspecialchars($_POST['name']) . '<br>';
        $name = mysqli_real_escape_string($conn, $_POST['name']);
    }
    if ($age && $name) {
        $sql = "INSERT INTO users (name, age) values ('$name', '$age')";
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header('location: index.php');
        }
    }
} else {
}


//<script>window.location="https://google.com"</script>