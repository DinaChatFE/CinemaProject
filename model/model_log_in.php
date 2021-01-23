<?php
session_start();
include '../config/db.php';
include '../Function/setSession.php';

$email = $_POST['email'];
$password = $_POST['password'];
if (isset($email) && isset($password)) {
    $sqlQueryAll = "SELECT * FROM users WHERE email = '$email' AND password= '$password'";
    $result_all = mysqli_query($conn, $sqlQueryAll);
    if (mysqli_num_rows($result_all) !== 0) {
        $result_fetch_all = mysqli_fetch_assoc($result_all);
        $sql = "SELECT *FROM users WHERE email= '$email'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);
        setSessionUsers($result['name'], $result['id']);
        echo '<script>location.href ="index.php"</script>';

    } else {
        echo '<script>alert("Please see your information before you go")</script>';
    }
}
