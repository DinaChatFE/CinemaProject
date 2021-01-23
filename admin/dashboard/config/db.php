<?php

$conn = mysqli_connect("localhost", "root", '', 'cinema');

if (!$conn) {
    echo "error" . mysqli_errno($conn);
}