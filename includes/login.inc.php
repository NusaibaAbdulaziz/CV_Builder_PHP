<?php

if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $password = $_POST["password"];
    


    require_once 'dph.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        // echo 'Wrong Login';
        exit();
        }


   loginUser($conn, $email, $password);
}
else {
    header("location: ../login.php");
    exit();
}