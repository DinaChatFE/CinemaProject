<?php
$con = new mysqli("localhost", "root", "", "cinema");
$movie_title = $_POST['movieTitle'];
$Duration_time = $_POST['DurTime'];
$MoviePrice = $_POST['moviePrice'];
$movieStatus = $_POST['moviestatus'];
$imageName = $_POST['imgName'];
$hall_id = $_POST['hall_id'];
$session_id = $_POST['session_id'];
$categories_id = $_POST['categories_id'];

// include './config/db.php';

// query vadilation from sql

$sql_vadilate = "SELECT * FROM movie WHERE session = $session_id AND hall_id = $hall_id";
$query = mysqli_query($con, $sql_vadilate);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (mysqli_num_rows($query) == 1) {
    echo "<script>alert('Duplicate hall in session')</script>";
} else {
    $sql = "INSERT INTO `cinema`.`movie`(`movieTitle`, `durationTime`, `moviePrice`, `movieStatus`, `image` , `hall_id` ,`session` , `categories`) VALUES ('$movie_title', '$Duration_time', '$MoviePrice','$movieStatus','$imageName', '$hall_id' , '$session_id' , '$categories_id')";

    $con->query($sql);
}