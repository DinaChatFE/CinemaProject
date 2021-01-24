<?php

//
include 'header.php';

include 'model/fetch_all_list.php';

?>
<div>
    <p id="mListTitle" style="text-align: center; padding: 30px 0px ;font-size: 1.25rem; font-weight: normal"> <span
            class="h3 p-3"> <i class=" fas fa-calendar-day"></i></span>Older Post</p>
    <div id="list" class="container">
        <?php foreach ($movies_list as $movie_all): ?>
        <div id="movieGrid">
            <a href="booking_detail.php?id=<?php echo $movie_all['movieID'] ?>">
                <img src=<?php echo 'admin/images/' . $movie_all['image'] ?> alt="movie" id="movieImage">
            </a>
            <div id="priceAndTitle" class="d-flex justify-contents-between">
                <p id="title"><?php echo $movie_all['movieTitle'] ?></p>
                <p id="price"> $ <?php echo $movie_all['moviePrice'] ?></p>
            </div>
            <div id="dateAndTime" class="h5" style="font-size: 1rem;">
                <p id="date"><?php echo $movie_all['durationTime'] ?> mn</p>
                <p id="time" class="text-primary" style="font-size: .85rem;"><?php echo $movie_all['session_name'] ?>
                </p>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>