
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
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between" style="font-family: 'Times New Roman', Times, serif"> 
                    <div>
                        <h1 class="font-weight-bold">' Shorten your way 
                            <span style="color:#FF725E;">to your dream job '</span> </h1>
                            <p><b> <ul class="lead" type="none">
                            <li> "at least 90% of all employment interviews were granted only after </li>
                            <li> a resume had been received and read", Rosch (1990) </li>
                            <p></p>
                            <li><b>GET THE BENEFIT OF OUR SERVICE</b> to be one of those 90%</li>
                            <li> people and create your professional resume in the blink of an eye!</li>
                            </ul></b></p>

                            <button class="btn btn-lg mt-4 text-light" style="background-color:#FF725E" onclick=" relocate_home()">Start tracking your dream ></button>
                            <script>
                              function relocate_home()
                              {
                                   location.href = "buildcv.php";
                              } 
                              </script>
                    </div>

                    <img class="img-fluid d-none d-sm-block" src="1.png" width="400px">

                </div>
            </div>
          </section>


          <section class="text-secondary p-5 text-center" style="background-color: #BFDADD">
            <div class="container">
              <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                  <img class="img-fluid d-none d-sm-block" src="2.png" width="500px">
                </div>
                <div>
                  <h3 class="font-weight-bold m-5" style="font-family: 'Times New Roman', Times, serif">
                    <ul type="none"><li>Don't miss the chance to try one of these resume designs:</li></h3>
                    
                    </ul>
                  
                  <div id="carouselExampleIndicators" class="carousel slide d-none d-sm-block ml-5" data-ride="carousel">
                    
                    <div>
                    <ol class="carousel-indicators " > 
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                  </div>
                  
                    <div>
                     <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                      <img class="d-block" src="4.jpg" alt="First slide" width="200px"  >
                    </div>
                      </div>
                      <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                        <img class="d-block " src="4.jpg" alt="Second slide" width="200px">
                      </div>
                      </div>
                      <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                        <img class="d-block" src="4.jpg" alt="Third slide" width="200px">
                      </div>
                      </div>
                    </div>
                    <p>&emsp;</p>
                    <p>&emsp;</p>
                    </div>
                    <a class="carousel-control-prev ml-5" href="#carouselExampleIndicators" role="button" data-slide="prev" >
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next mr-5" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>                 
                </div>
              </div>
            </div>
          </section>

 <?php

 include_once 'footer.php';

 ?>

</body>
</html>