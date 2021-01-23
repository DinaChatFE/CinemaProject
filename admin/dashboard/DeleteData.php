<?php
$con = new mysqli("localhost", "root", "", "cinema");
$Id = $_POST['ItemID'];
$sql = "DELETE FROM `cinema`.`movie` WHERE `movieID` = $Id";
$con->query($sql);
