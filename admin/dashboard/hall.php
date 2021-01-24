<?php
include 'admin_header.php';
include 'admin_menu.php';
include 'config/db.php';
include './model/getHall.php';

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
    <div class="container" style="font-family: sans-serif">
        <div class="row">
            <div class="col-6">
                <form method='POST' action="model/postHall.php">
                    <h3 style="padding: 20px 0px 20px 0px;">Add new hall to system</h3>
                    <div class="form-group">
                        <label for="text" name='hall_name'> Hall name</label>
                        <input type="text" class="form-control" id="hallname" placeholder="hall name" name='hall_name'>
                    </div>
                    <div class="form-group">
                        <label for="password">seat amount</label>
                        <input type="text" name='seat_amount' class="form-control" id="seatAmount"
                            placeholder="seat amount">
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit_hall" value="submit">
                </form>
            </div>
            <div class="col-6 pl-3">

                <table class="table m-5">

                    <thead>
                        <h5 class="pl-5 pt-3">List hall</h5>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hall's name</th>
                            <th scope="col">Seat amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $result): ?>
                        <tr>
                            <th scope="row"><?php echo $result['hall_id'] ?></th>
                            <td><?php echo $result['hall_name'] ?></td>
                            <td><?php echo $result['seat_amount'] ?></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>