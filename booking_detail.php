<?php
include 'header.php';
include 'model/model_booking_detail.php';

?>

<head>
    <style>
    .navbar-nav li:nth-child(2) a {
        color: black !important;
    }

    .div__seat {
        transition: .3s ease;
    }

    .status0 {
        pointer-events: none;
    }

    .div__seat:hover {
        cursor: pointer;
        transform: scale(1.1);
    }

    .seat_name {
        color: #fff;
        font-size: clamp(1.3rem, 2vw, 2rem);
        position: absolute;
        top: 30%;
        left: 40%;
    }
    </style>
</head>

<body>
    <div class="container" style="font-family: sans-serif;padding: 20px">
        <h4 class="pt-5">Movie name</h4>
        <div class="d-flex detail__content align-items-center" style="padding: 40px 0px; ">
            <div class="img_content" style="min-height: 300px; background-color: lightblue;width: 50%">
                <img src="<?php echo 'admin/images/' . $result_detail['image'] ?>" alt=""
                    style="  width: 100%;  object-fit: cover; ">
            </div>
            <div class="text-content pl-5 ">
                <p>Categories: <?php echo $result_detail['categories'] ?></p>
                <p>Duration: <?php echo $result_detail['duration_time'] ?></p>
                <p>Price: <?php echo $result_detail['moviePrice'] ?></p>
                <p>Start time: <?php echo $result_detail['start_time'] ?></p>
                <p>End time: <?php echo $result_detail['end_time'] ?></p>
                <div class="d-flex align-items-center">
                    <p>Seat: </p><button class="btn btn-outline-dark pt-1 pb-1 ml-5" data-toggle="modal"
                        data-target="#exampleModal">Choose Seat</button>
                </div>
                <p id="p__id">You choose: </p>
                <button class="btn" id='submit_booking'
                    style="background-color: #e720b7 !important; font-weight: 500;color: #fff; margin-top: 10px; padding: 7px 30px; text-transform : uppercase">Booking</button>
            </div>
        </div>
        <h4 class="pt-5">Relate Movie</h4>
        <hr>

        <!-- modal part -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chhoose Seat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <?php foreach ($result_seat as $seats): ?>
                            <div onclick="getSeatID('<?php echo $seats['seat_id'] ?>')"
                                onmouseup="getSeatName('<?php echo $seats['seat_id_name'] ?>')"
                                class="col-4 div__seat <?php echo 'status' . $seats['status'] ?>"
                                style="position: relative">

                                <?php if ($seats['status'] == 0): ?>

                                <img src="admin/images/seat_avialble.png" style="width: 100%;" style="opacity: 0.2;">
                                <?php else: ?>
                                <span class="seat_name"><?php echo $seats['seat_id_name'] ?></span>
                                <img src="admin/images/seat.png" style="width: 100%;" style="opacity: 0.2;">
                                <?php endif?>


                            </div>
                            <?php endforeach?>
                            <input type="hidden" id="get__id" value="">
                            <input type="hidden" id="get__name" value="">
                            <input type="hidden" id="get__uid" value="<?php echo $_SESSION['userId']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id='submit_seat'>Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="./javascript/choosingSeat.js"></script>
    <script src="./javascript/bookSubmit.js"></script>
</body>