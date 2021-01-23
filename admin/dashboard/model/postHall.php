<?php

include '../config/db.php';
$hall_name = $_POST['hall_name'];
$seat_amount = $_POST['seat_amount'];
$session = $_POST['session_detail'];

if (isset($_POST['submit_hall'])) {

    $sql = "INSERT INTO hall (hall_name, seat_amount) VALUE ('$hall_name', '$seat_amount')";

    if (!mysqli_query($conn, $sql)) {
        echo "Error";

    } else {

        // query hall name
        $sql_hall_name = "SELECT * FROM hall WHERE hall_name = '$hall_name'";
        $query_hall_name = mysqli_query($conn, $sql_hall_name);
        $result = mysqli_fetch_assoc($query_hall_name);
        $hall_id = $result['hall_id'];
        // print_r($result['hall_id']);

        // query session from database
        $sql_session = "SELECT * FROM session_detail";
        $query_session = mysqli_query($conn, $sql_session);
        // $number_row_session = mysqli_num_rows($query_hall_name);

        $result_session_int = $query_session->num_rows;

        for ($k = 0; $k < $result_session_int; $k++) {
            $session_index = $k + 1;
            for ($i = 0; $i < $seat_amount; $i++) {
                $j = $i + 1;
                $sql_insert_seat[$i] = "INSERT INTO seat (seat_id_name , hal_id ,status , session ) VALUE('$hall_name$j', $hall_id , 1 , $session_index)";
                mysqli_query($conn, $sql_insert_seat[$i]);
            }
        }

        header("Location: ../hallDetail/hall.php");
    }

}