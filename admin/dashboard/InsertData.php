<?php
$con = new mysqli("localhost", "root", "", "cinema");
$movie_title = $_POST['movieTitle'];
$Duration_time = $_POST['DurTime'];
$MoviePrice = $_POST['moviePrice'];
$movieStatus = $_POST['moviestatus'];
$imageName = $_POST['imgName'];
$hall_id = $_POST['hall_id'];

$sql = "INSERT INTO `cinema`.`movie`(`movieTitle`, `durationTime`, `moviePrice`, `movieStatus`, `image` , `hall_id`) VALUES ('$movie_title', '$Duration_time', '$MoviePrice','$movieStatus','$imageName', '$hall_id')";
$con->query($sql);