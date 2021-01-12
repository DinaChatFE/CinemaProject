<?php
include 'db/db.php';
include "Controller/functionAction.php";
$id = 1;

$sql = 'SELECT *FROM movie WHERE movie_id = $id ';

// $result = fetchAssoc($conn, $sql);