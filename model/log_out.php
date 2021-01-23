<?php
session_start();
if (isset($_POST['status'])) {
    session_destroy();
}