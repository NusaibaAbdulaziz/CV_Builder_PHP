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
<?php
 
include_once 'header.php';

?>



          <section class="text-secondary p-5 text-center" style="background-color: #BEDCFE;">
             
            <div id="signup">
        
              <div class="container">
                  <div id="signup-row" class="row justify-content-center align-items-center">
                      <div id="signup-column" class="col-md-6">
                          <div id="signup-box" class="col-md-12">
                              <form id="signup-form" class="form" action="includes/signup.inc.php" method="post">
      
                      <p>&emsp;</p>
                      
                                 
                                <div class="row">
                                  <div class="col-xs-6 col-md-6">
                                    <label for="username" class="text-info h5">Your first name:</label><br>
                                      <input class="form-control" name="firstname" type="text" required autofocus />
                                  </div>
                                  <div class="col-xs-6 col-md-6">
                                    <label for="username" class="text-info h5">Your last name:</label><br>
                                      <input class="form-control" name="lastname" type="text" required />
                                  </div>
                              </div>
                              <p>&emsp;</p>

                                <div class="form-group">
                                  <label for="email" class="text-info h5">Your email address:</label><br>
                                  <input type="email" name="email"  class="form-control" id="email">
                              </div>

                            
                                  <div class="form-group">
                                      <label for="password" class="text-info h5">pass-word:</label><br>
                                      <input type="password" name="password" id="password" class="form-control">
                                  </div>

                                  <div class="form-group">
                                    <label for="phonenumber" class="text-info h5">Phone number:</label><br>
                                    <input type="text" name="tele" class="Tele form-control" id="phonenumber">
                                </div>

                              
                                  <div class="form-group">
                                      <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign up">
                                  </div>
      
                                  <div id="register-link" class="text-right">
                                      <a href="Login.php" class="text-info">Already have an account?</a>
                                  </div>
                                  
      
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <p>&emsp;</p>

          <?php
          if (isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
              echo "<p> You might have forgotten somthing (: </p>";
            }
            else if ($_GET["error"] == "invaliduid"){
              echo "<p> Make sure to write proper name(s) </p>";
            }
            else if ($_GET["error"] == "invalidemail"){
              echo "<p> Make sure to write a proper email</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
              echo "<p> Something went wrong </p>";
            }
            else if ($_GET["error"] == "emailtaken"){
              echo "<p> You might have an account!</p>";
            }
            else if ($_GET["error"] == "none"){
              echo "<p> You are in! </p>";
            }
          }
          ?>


          </section>

 
<?php


include_once 'footer.php';

?>

</body>
</html>