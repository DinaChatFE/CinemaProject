<?php
function fetchArray($conn, $sql)
{
    $result = mysqli_query($conn, $sql);

    $result_array = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $result_array;
}

function postData($conn, $sql, $callBack)
{
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $callBack();
    } else {
        echo "error while posting";
    }
}

function fetchAssoc($conn, $sql)
{
    $result = mysqli_query($conn, $sql);
    $result_assocc = mysqli_fetch_assoc($result, MYSQLI_ASSOC);

    return $result_assocc;
}