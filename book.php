<?php
require_once 'model/fetchAll.php';

?>


<head>
    <style>
    .navbar-nav li:nth-child(2) a {
        color: black !important;
    }
    </style>
</head>

<body>
    <!--Navigation Bar-->
    <?php include "header.php"?>

    <div>
        <p id="mListTitle" style="text-align: center; padding: 30px 0px ;font-size: 1.25rem">MOVIE LIST - TODAY</p>
        <div id="list" class="container">

            <?php foreach ($movies as $movie): ?>

            <div id="movieGrid">
                <a href="booking_detail.php?id=<?php echo $movie['movieID'] ?>">
                    <img src=<?php echo 'admin/images/' . $movie['image'] ?> alt="movie" id="movieImage">
                </a>
                <div id="priceAndTitle">
                    <p id="title"><?php echo $movie['movieTitle'] ?></p>
                    <p id="price"> $ <?php echo $movie['moviePrice'] ?></p>
                </div>
                <div id="dateAndTime">
                    <p id="date"><?php echo $movie['start_time'] ?></p>
                    <p id="time"><?php echo $movie['end_time'] ?></p>
                </div>

            </div>

            <?php endforeach;?>
        </div>
    </div>
    <!--Footer-->
    <?php include 'footer.php'?>
    <script src="javascript/booking.js"></script>
</body>

</html>