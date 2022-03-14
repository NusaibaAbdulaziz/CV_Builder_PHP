<?php

function emptyInputSignup($fisrtname, $lastname, $email, $password, $phoneNumber){
  $results;

  if (empty($fisrtname) || empty($lastname) || empty($email) || empty($password) || empty($phoneNumber) ){
    $results = true;
  }
  else {
      $results = false;
  }
  return $results;
}


function invalidUid($fisrtname, $lastname){
  $results;
  if (!preg_match("/^[a-zA-Z0-9]*$/",$fisrtname, $lastname)){
  $results = true;
  }
  else {
      $results = false;
  }
  return $results;
}



  function invalidEmail($email){
    $results;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $results = true;
    }
    else {
        $results = false;
    }
    return $results;
  }

function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
  }


  function createUser($conn, $fisrtname, $lastname, $email, $password, $phoneNumber){
    $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersPassword, usersPhone) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $fisrtname, $lastname, $email, $hashedPassword, $phoneNumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();

  }


  function emptyInputLogin($email, $password){
    $results;
  
    if ( empty($email) || empty($password) ){
      $results = true;
    }
    else {
        $results = false;
    }
    return $results;
  }

 function loginUser($conn, $email, $password){
     $emailExists = emailExists($conn, $email);

     if ($emailExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
     }

     $passwordhashed = $emailExists["usersPassword"];
     $checkpassword = password_verify($password, $passwordhashed);


     if ($checkpassword === false){
        header("location: ../login.php?error=wronglogin");
        exit();

     }
     else if($checkpassword === true){
         session_start();
         $_SESSION["userid"] = $emailExists["usersId"];
         $_SESSION["userfirstname"] = $emailExists["usersFisrtName"];
         header("location: ../CV_Builder.php");
         exit();
     }
 }
