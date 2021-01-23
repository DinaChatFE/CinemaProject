<?php
$con = new mysqli("localhost", "root", "", "cinema");
$movieID = $_POST['movieID'];
$movie_title = $_POST['movieTitle'];
$Duration_time = $_POST['DurTime'];
$MoviePrice = $_POST['moviePrice'];
$imageName = $_POST['imgName'];
$sql = "UPDATE `cinema`.`movie` SET `movieTitle` = '$movie_title', `durationTime` = '$Duration_time', `moviePrice` = '$MoviePrice', `movieStatus` = b'0', `image` = '$imageName' WHERE `movieID` = $movieID";
$con->query($sql);

echo $movieID;