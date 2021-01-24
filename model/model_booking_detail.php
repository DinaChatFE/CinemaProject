<?php

include 'config/db.php';
include 'Function/functionAction.php';

$get_id = $_GET['id'];

if (isset($get_id)) {
    $sql_query = "SELECT * FROM movie WHERE movieID = $get_id";

    $result_detail = fetchAssoc($conn, $sql_query);

    $result_hall = $result_detail['hall_id'];
    $result_session_id = $result_detail['session'];

    $sql_select_hal = "SELECT *FROM seat LEFT JOIN hall ON seat.hal_id = hall.hall_id WHERE hall_id = $result_hall AND session = $result_session_id";

    // fetch seat
    $query_seat = mysqli_query($conn, $sql_select_hal);
    $result_seat = mysqli_fetch_all($query_seat, MYSQLI_ASSOC);

}