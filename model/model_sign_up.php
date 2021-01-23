<?php
include '../config/db.php';
include '../Funcion/setSession.php';
session_start();

$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];

if (isset($name) && isset($address) && isset($gender) && isset($email) && isset($phonenumber) && isset($password)) {

    $sql_query_all = "SELECT * FROM users WHERE email= '$email'";

    if (mysqli_num_rows(mysqli_query($conn, $sql_query_all)) === 0) {
        $sql_query = "INSERT INTO users (name, email, gender, address, phone_number , password) VALUES( '$name' , '$email' , '$gender' , '$address' , '$phonenumber' ,'$password')";
        $result = mysqli_query($conn, $sql_query);

        if (!$result) {
            echo "error";
        } else {

            $sql_get_id = "SELECT * FROM users WHERE email= '$email'";
            $query_get_id = mysqli_query($conn, $sql_get_id);
            $result_user = mysqli_fetch_assoc($query_get_id);
            setSessionUsers($name, $result_user['id']);
            echo "<script>location.href = 'index.php'</script>";
        }

    } else {
        echo "email must be uniq";
    }

}