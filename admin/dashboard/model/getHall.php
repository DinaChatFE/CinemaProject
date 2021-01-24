<?php
include 'config/db.php';

echo "hello";
$sql_hall = "SELECT * FROM hall";

$results = mysqli_fetch_all(mysqli_query($conn, $sql_hall), MYSQLI_ASSOC);
