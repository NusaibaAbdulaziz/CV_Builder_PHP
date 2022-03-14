<?php

if (isset($_POST["submit"])){
    
    $fisrtname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phoneNumber = $_POST["tele"];


    require_once 'dph.inc.php';
    require_once 'functions.inc.php'; 


    if (emptyInputSignup($fisrtname, $lastname, $email, $password, $phoneNumber) !== false) {
      header("location: ../signup.php?error=emptyinput");
      exit();

      }
      if (invalidUid($fisrtname, $lastname) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
  
      }

      if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
  
      }

    
    if (emailExists($conn, $email) !== false) {
      header("location: ../signup.php?error=emailtaken");
      exit();

    }

    createUser($conn, $fisrtname, $lastname, $email, $password, $phoneNumber);
}


else {
    header("location: ../signup.php");
    exit();
}


