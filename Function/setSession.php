<?php

function setSessionUsers($username, $userid)
{
    $_SESSION['name'] = $username;
    $_SESSION['userId'] = $userid;
}
