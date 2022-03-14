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
                                <input type="text" name="password" id="password" class="form-control">
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