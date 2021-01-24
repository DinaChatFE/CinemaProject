<?php

include 'config/db.php';
include 'Function/functionAction.php';

// booking movie
$sql_list = "SELECT * FROM movie  LEFT JOIN session_detail ON movie.session = session_detail.session_id  WHERE DATE(create_at) != CURDATE()";

$movies_list = fetchArray($conn, $sql_list);

// add movie to database