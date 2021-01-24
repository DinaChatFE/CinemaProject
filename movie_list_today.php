<?php

require_once 'model/fetch_list_today.php';

?>

<head>

    <style>
    .navbar-nav li:nth-child(2) a {
        color: black !important;
    }

    .movieGrid {
        width: 400px !important;
    }

    .overflow-ellipsis {
        color: rgb(0, 0, 0, 0.6);
        text-overflow: ellipsis;
        /* white-space: nowrap; */
        height: 20px;
        text-align: left;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        width: 80%;
    }
    </style>
</head>

<body>
    <!--Navigation Bar-->
    <?php include "header.php"?>

    <div class="text-center">
        <p id="mListTitle" class="text-title_list">
            <span class="h3 p-3"> <i class=" fas fa-calendar-day"></i></span>MOVIE
            LIST - TODAY
        </p>
        <div id="list" class="container" style="max-width: 1500px;">

            <?php foreach ($movies as $movie): ?>

            <div id="movieGrid" class="movieGrid" style="width: 315px !important; height: 450px;">
                <a href="booking_detail.php?id=<?php echo $movie['movieID'] ?>">
                    <img src=<?php echo 'admin/images/' . $movie['image'] ?> alt="movie" id="movieImage">
                </a>
                <div id="priceAndTitle" class="d-flex justify-content-between">
                    <p id="title" class="overflow-ellipsis">
                        <?php echo $movie['movieTitle'] ?></p>
                    <p id="price" style="width: 20%;" class='text-success'> $ <?php echo $movie['moviePrice'] ?></p>
                </div>
                <div id="dateAndTime" class="h5" style="font-size: 1rem;">
                    <p id="date"><?php echo $movie['durationTime'] ?> :00mn</p>
                    <p id="time" class="text-primary" style="font-size: .85rem;"><?php echo $movie['session_name'] ?>
                    </p>
                </div>

            </div>

            <?php endforeach;?>

        </div>
        <a href="movie_list_all.php" class="btn btn-outline-primary text-uppercase"
            style=" margin: 50px;font-family: sans-serif;">see
            older</a>
    </div>
    <!--Footer-->
    <?php include 'footer.php'?>
    <script src="javascript/booking.js"></script>
</body>

</html>