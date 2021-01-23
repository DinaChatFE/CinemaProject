<?php

$con = new mysqli("localhost", "root", "", "cinema");
$sql = "SELECT * FROM `cinema`.`movie` LIMIT 0,1000";
$result = $con->query($sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<div><tr id = '$row[movieID]'>";

    echo "<td id='MovieID'>" . $row['movieID'] . "<input type='checkbox' name='ck[]' value='Visible' style ='margin-left: 20px;'></td>";
    echo "<input type='hidden' value ='" . $row['movieID'] . "'>";
    echo "<td id='MovieTitle'>" . $row['movieTitle'] . "</td>";
    echo "<input type='hidden' value ='" . $row['movieTitle'] . "'>";
    echo "<td id='durationTime'>" . $row['durationTime'] . "</td>";
    echo "<input type='hidden' value ='" . $row['durationTime'] . "'>";
    echo "<td id='moviePrice'>" . $row['moviePrice'] . "</td>";
    echo "<input type='hidden' value ='" . $row['moviePrice'] . "'>";
    echo "<td id='movieStatus'>" . $row['movieStatus'] . "</td>";
    echo "<td id='hall_id'>" . $row['hall_id'] . "</td>";
    echo "<input type='hidden' value ='" . $row['hall_id'] . "'>";
    echo "<td style='display: flex ;height: 40px ;align-items: center'><img src='../images/" . $row['image'] . "'width='100px' height='100px' id='imgView'><button class ='btn btn-primary m-2' id='EditBtn'>Edit</button><button class = 'btn btn-danger' id='DeleteBtn' >Delete</button></td>";
    echo "<input type='hidden' value ='" . $row['image'] . "'>";
    echo "</tr></div>";
}
