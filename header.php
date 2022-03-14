<?php
 session_start();
 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="descripation" content="curriculum vitae builder">
        <meta name="viewport" content="width=device-width, intial-scale=0.1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>CV builder</title>
          
    </head>
    <body >
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container">
            <a class="navbar-brand" href="aboutus.html"><img src="logo0.png" width="140"> </a>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmenue">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmenue">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="CV_Builder.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <?php
                if (isset($_SESSION["usersEmail"])){
                  echo "<li class='nav-item'>
                  <a class='nav-link text-light' href='Profile.php'>Profile page</a>
                </li>";
                  echo  "<li class='nav-item'>
                  <a class='nav-link text-light' href='logout.php'>Log out</a>
                </li>";
                }
                else {
                  echo "<li class='nav-item'>
                  <a class='nav-link text-light' href='Login.php'>Login</a>
                </li>";
                  echo  "<li class='nav-item'>
                  <a class='nav-link text-light' href='signup.php'>Sign up</a>
                </li>";

                }

                ?>
                
                
                <li>
                  <div class="dropdown">

                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" >
                      
                    </button>
                    <ul class="dropdown-menu text-center">
                      <li><a href="buildcv.php">Create CV</a></li>
                      <li><a href="aboutus.php">About us</a></li></ul>
                    
                  </div>
                </li>
              </ul>
            </div>
           </div>
          </nav>