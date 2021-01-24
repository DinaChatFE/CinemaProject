<?php

session_start();
include 'config/Auth.php';

?>

<head>
    <title>Home</title>
    <link href="assets/css/home.css" type="text/css" rel="stylesheet">
    <link href="assets/css/booking.css" type="text/css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/css/booking_detail.css"></script>
    <link rel="stylesheet" href="assets/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel/dist/assets/owl.theme.default.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Squada+One&display=swap');

    .arvata_tage {
        top: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.3rem;
        font-weight: bold;
        right: 30px;
        position: absolute;
        color: #fff;
        background-color: #e720b7;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        transition: .3s ease;
        box-shadow: 1px 2px 4px rgb(0, 0, 0, 0.09);
    }

    @media screen and (max-width: 1000px) {
        .arvata_tage {
            display: none;
        }
    }

    .arvata_tage:hover {
        text-decoration: none;
        background-color: #6e0857;
        color: #fff;
    }
    </style>

</head>

<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-light nav--div" style="border-bottom: 1px solid #cccc;">
    <a href="index.php">
        <h1 class="navbar-brand" href="#">CINEMA</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end div__context" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="movie_list_today.php">BOOKING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>

            <a href="#"
                class="arvata_tage"><?php echo ucfirst($_SESSION['name'][0]) . ucfirst($_SESSION['name'][1]) ?></a>
            <li class="nav-item">
                <a class="nav-link" href="log_in.php" id="log_out">LOG OUT</a>
            </li>

        </ul>
    </div>
</nav>

<body>
    <script src="javascript/log_out.js"></script>
</body>