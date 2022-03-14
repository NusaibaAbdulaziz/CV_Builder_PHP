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
            
      <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="includes/login.inc.php" method="post">

                <p>&emsp;</p>
                <p>&emsp;</p>

            
                
                            <div class="form-group">
                             
                                <label for="email" class="text-info h5">Kindly write your email address:</label><br>
                                <input type="email" name="email"  class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info h5">pass-word:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                           

                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>

                            <div id="register-link" class="text-right">
                                <a href="signup.php" class="text-info">Don't have an account?</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>&emsp;</p>
    <p>&emsp;</p>

    <?php
          if (isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
              echo "<p> You might have forgotten somthing (: </p>";
            }
            else if ($_GET["error"] == "wronglogin"){
              echo "<p> Incorrect data </p>";
            }
           
          }
          ?>
     
    </section>



<?php

include_once 'footer.php';

?>

</body>
</html>