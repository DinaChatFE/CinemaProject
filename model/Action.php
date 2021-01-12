<?php

include 'db/db.php';
include 'controller/functionAction.php';

// booking movie
$sql = "SELECT * FROM movie";

$movies = fetchArray($conn, $sql);

// add movie to database