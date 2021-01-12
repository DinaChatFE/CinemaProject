<?php
require_once 'model/Action.php';
?>

<body>
    <!--Navigation Bar-->
    <?php include "header.php"?>

    <div>
        <p id="mListTitle" style="text-align: center; padding: 30px 0px">MOVIE LIST - TODAY</p>
        <div id="list" class="container">

            <?php foreach ($movies as $movie): ?>
            <div id="movieGrid">
                <a data-toggle="modal" data-target="#hallModal">
                    <img src=<?php echo 'assets/images/' . $movie['img'] ?> alt="movie" id="movieImage">
                </a>

                <div id="priceAndTitle">
                    <p id="title"><?php echo $movie['movie_name'] ?></p>
                    <p id="price"> $ <?php echo $movie['movie_price'] ?></p>
                </div>
                <div id="dateAndTime">
                    <p id="date"><?php echo $movie['start_time'] ?></p>
                    <p id="time"><?php echo $movie['end_time'] ?></p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="modal fade" id="hallModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Cinema Hall</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container" id="hallList">
                        <a data-toggle="modal" data-target="#SeatModal">
                            <div class="hall">
                                <p>Hall A</p>
                            </div>
                        </a>

                        <div class="hall">
                            <p>Hall B</p>
                        </div>
                        <div class="hall">
                            <p>Hall C</p>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="SeatModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include 'footer.php'?>
    <script src="javascript/booking.js"></script>
</body>

</html>