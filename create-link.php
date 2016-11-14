<?php
    $servername = "localhost";
    $username = "user";
    $password = "trGBK7myJfudFrQh";
    $dbname = "student2206partb";

    $link = mysqli_connect($servername, $username, $password, $dbname);

    if (!$link) {
        die("Connection failed");
    }
?>