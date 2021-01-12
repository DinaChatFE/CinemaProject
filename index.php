<!DOCTYPE html>
<html>


<body>
    <?php include "header.php"?>

    <!--Body-->
    <div id="bodyContainer">
        <div id="intro">
            <h3>WANT TO BOOK SOME INTERESTED MOVIE</h3>
            <p>This is a web application to booking the movie that you interested. You can find your interested movie,
                the interested seat and choose the time you want.</p>
            <a href="book.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"
                id="bookingBt">START BOOKING</a>
        </div>
        <div id="cinemaImage">
            <img src="assets/images/cinemaHome.png" alt="cinema">
        </div>
    </div>
    <div id="line">
        <p class="separator"></p>
        <p>TREND</p>
        <p class="separator"></p>
    </div>

    <!--Carousel-->
    <div id="carouselExampleInterval" class="carousel slide container mt-5 mb-5" data-ride="carousel"
        style="width: 80%;">
        <div class="carousel-inner" style="width: 100%; object-fit: cover;">
            <div class="carousel-item active" data-interval="1000">
                <img src="assets/images/carousel1.jpg" class="d-block" alt="Banner" width="100%"
                    style="object-fit: cover; object-position: center;">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="assets/images/carousel2.jpg" class="d-block" alt="Banner" width="100%"
                    style="object-fit: cover; object-position: center;">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="assets/images/carousel3.jpg" class="d-block w-100" alt="Banner" width="100%"
                    style="object-fit: cover; object-position: center;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev"
            style="object-fit: cover; object-position: center;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next"
            style="object-fit: cover; object-position: center;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php include 'footer.php'?>
</body>

</html>