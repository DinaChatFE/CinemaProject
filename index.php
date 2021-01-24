<?php

?>
<!DOCTYPE html>
<html>

<head>
    <style>
    .navbar-nav li:nth-child(1) a {
        color: black !important;
    }

    .img__carousel:hover {
        transition: .3s ease;
    }

    .img__carousel:hover {
        transition: .3s ease;
        transform: scale(1.2);
    }
    </style>

</head>

<body>
    <?php include "header.php"?>

    <!--Body-->
    <div id="bodyContainer" style="max-width: 1500px !important;padding-top: 120px;">
        <div id="intro">
            <h3>WANT TO BOOK SOME INTERESTED MOVIE</h3>
            <p>This is a web application to booking the movie that you interested. You can find your interested movie,
                the interested seat and choose the time you want.</p>
            <a href="movie_list_today.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"
                id="bookingBt">START BOOKING</a>
        </div>
        <div id="cinemaImage">
            <img src="assets/images/cinemaHome.png" alt="cinema">
        </div>
    </div>
    <div id="line" style="max-width: 100% ">
        <p class="separator" style="width: 100%;"></p>
        <p class="h5">TREND</p>
        <p class="separator" style="width: 100%;"></p>
    </div>


    <div id="carouselExampleInterval" class="carousel slide container mt-5 mb-5" data-ride="carousel"
        style="max-width: 1500px ; height: 300px !important; overflow: hidden; object-fit: cover;">
        <!--Carousel-->
        <div class="owl-carousel owl-theme" style="height: 100%;">
            <div class="item d-flex align-items-center img__carousel" data-merge="2">
                <a href="">
                    <img src="admin/images/m6.jpg" alt="" style="height: 100%;"></a>
            </div>
            <div class="item d-flex align-items-center img__carousel" data-merge="2">
                <a href="">
                    <img src="admin/images/m1.jpg" alt="" style="height: 100%;"></a>
            </div>
            <div class="item d-flex align-items-center img__carousel" data-merge="2">
                <a href="">
                    <img src="admin/images/m6.jpg" alt="" style="height: 100%;"></a>
            </div>
        </div>
    </div>
    <script src="assets/OwlCarousel/docs/assets/vendors/jquery.min.js"></script>
    <script src="assets/OwlCarousel/dist/owl.carousel.js"></script>
    <?php include 'footer.php'?>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 5
            },
            600: {
                items: 10
            },
            1000: {
                items: 10
            }
        }
    })
    </script>
</body>

</html>