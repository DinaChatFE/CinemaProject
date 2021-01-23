<?php
include '../admin_header.php';
include '../admin_menu.php';

?>

<head>
    <link rel="stylesheet" href="../dashboard.css">
    <style>
    .data-nav li:nth-child(2) a {
        color: blue !important;
    }
    </style>
</head>

<body>
    <div class="container" style="font-family: sans-serif; max-width: 500px">
        <form method='POST' action="../model/postHall.php">
            <h3 style="padding: 20px 0px 20px 0px;">Add new hall to system</h3>
            <div class="form-group">
                <label for="text" name='hall_name'> Hall name</label>
                <input type="text" class="form-control" id="hallname" placeholder="hall name" name='hall_name'>
            </div>
            <div class="form-group">
                <label for="password">seat amount</label>
                <input type="text" name='seat_amount' class="form-control" id="seatAmount" placeholder="seat amount">
            </div>
            <div class="form-group">
                <label for="text">session</label>
                <input type="text" name='session_detail' class="form-control" id="seatAmount" placeholder="session">
            </div>
            <input type="submit" class="btn btn-primary" name="submit_hall" value="submit">
        </form>
    </div>
</body>