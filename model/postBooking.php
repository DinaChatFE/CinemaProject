<?php
include '../config/db.php';
include '../Function/functionAction.php';
$movie_id = $_POST['movie_id'];
$customer_id = $_POST['customer_id'];
$seat_id = $_POST["seat_id"];
if (isset($movie_id) && isset($customer_id) && isset($seat_id)) {

    $sql_query_book = "INSERT INTO  book_detail (movie_id, customer_id, seat_id ) VALUE ($movie_id, $customer_id, $seat_id)";
    $resultQuery = postData($conn, $sql_query_book, function () {
    });
    $sql_change_status = "UPDATE seat SET status = 0 WHERE seat_id =  $seat_id";
    $result = postData($conn, $sql_change_status, function () {
        echo "true";
    });
}