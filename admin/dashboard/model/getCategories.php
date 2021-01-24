<?php
include 'config/db.php';

$sql_categories = "SELECT * FROM categories";

$results = mysqli_fetch_all(mysqli_query($conn, $sql_categories), MYSQLI_ASSOC);