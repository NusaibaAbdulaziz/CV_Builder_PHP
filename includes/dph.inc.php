<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "cv_builder";

$conn =  mysqli_connect($servername, $dBUsername, $dBPassword, $dBName );

if (!$conn) {
    die("Connection failed : ".mysqli_connect_error());
}

// function getPosts() {
//     global $conn;
//     $query = mysqli_query($conn,"SELECT * FROM userscvdata");
//     }