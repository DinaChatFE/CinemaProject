<?php
include '../config/db.php';
if (isset($_POST['submit_categories'])) {
    $name = $_POST['categories_name'];
    $sql = "INSERT INTO categories(categories_name)  VALUE ('$name')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../categories.php");
    } else {
        echo "<script>alert('error')</script>";
    }
}