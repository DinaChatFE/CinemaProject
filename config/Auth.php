<?php
$name = $_SESSION['name'];
if (!isset($name)) {
    header("Location: log_in.php");
}