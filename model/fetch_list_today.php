<?php

include 'config/db.php';
include 'Function/functionAction.php';

// booking movie
$sql = "SELECT * FROM movie  LEFT JOIN session_detail ON movie.session = session_detail.session_id  WHERE DATE(create_at) = CURDATE()";

$movies = fetchArray($conn, $sql);

// add movie to database