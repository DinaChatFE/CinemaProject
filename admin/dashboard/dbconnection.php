<?php
$servername = "localhost";
$db = "cinema";
$password = "";
$username = "root";

//Create connection
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
// echo "Connected successfully";
