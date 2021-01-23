<?php

include 'config/db.php';
include 'Function/functionAction.php';

// booking movie
$sql = "SELECT * FROM movie WHERE DATE(create_at) = CURDATE()";

$movies = fetchArray($conn, $sql);

// add movie to database