<?php
 session_start();
//  if (isset($_SESSION['userId']))
 include_once 'includes/dph.inc.php';
 ?>



    
 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="descripation" content="curriculum vitae">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>CV</title>
        <style>
            
           
            body{

                top:4px;
                bottom:4px;
                padding-top:0px;
                margin:auto;
                position: relative;
                width: 900px;
                height:100%;
                box-shadow: 0 3px 10px rgb(0 0 0/0.4);
                font-family: system-ui, system-ui, sans-serif;
                font-size: 100%;
                background-color: #E6E6E6;
               
            }

           .Top{
               height: 10%;
               width: 900px;
               background:#6e6e6e;
           }

           .Left{
            background-color:rgb(255, 224, 179);
               
           }
           
           .Right{
               width:589.5px;
               background-color: white;
               position: absolute;
               top: 254px;
               right:0px;
               height:74%;
              
               
           }

           .ExtraSpace_1{
               width:589px;
               background-color: white;
               position: absolute;
               bottom: 1px;
               right:1px;
               height: 0.2px;
           }

           .ExtraSpace_2{
            background-color:rgb(255, 224, 179);
            width:310px;
            position: absolute;
            left:0px;
            top:254px;
            height:100px;
           }




        </style>
    </head>
    <body class="text-secondary" >
      <div class="Top"> 
          <ul type="none" class="text-light text-center">
            <br>
            <br>
            <br>
            <br>
            <br>
        <li>  <font size="8"  >
        <?php

               $user = '4';
              //  $user = $_SESSION['userId'];
               $sql = "SELECT FullName FROM `userscvdata` cd WHERE cd.userId=$user;"; 
                $query = mysqli_query($conn, $sql);
                $row = $query->fetch_assoc();
                echo $row["FullName"];

         ?>
        </font></li>
        <li> <i>
        <?php
                if (isset($_SESSION['Major'])){

                  echo "<p> ".$_SESSION['Major']."</p>";
                }
        ?>
        </i></li>
        <br>
        <br>
        <br>
    </ul> </div>

    <div class="Left"> 
        <br>
<ul type="none">
    <li> <font color="orange"size="5" >SKILLS</font></li>
    <p></p>
    
    <li><b>General</b></li>
    <?php
                if (isset($_SESSION['GeneralSkills'])){

                  echo "<p> ".$_SESSION['GeneralSkills']."</p>";
                }
    ?>
</ul>

<ul type="none"> 
    <li><b>Major</b></li>
    <?php
                if (isset($_SESSION['MajorSkills'])){

                  echo "<p> ".$_SESSION['MajorSkills']."</p>";
                }
    ?>
</ul>



<ul type="none"> 
    <li><b>Languages</b></li>
    <?php
                if (isset($_SESSION['Languages'])){

                  echo "<p> ".$_SESSION['Languages']."</p>";
                }
    ?>
</ul>
<br>
<br>
<br>
<br>

<ul type="none">
<li> <font color="orange" size="5" >CONTACT</font></li>
<br> 
<li> <img src="home.png" width="15"> &nbsp 
<?php
                if (isset($_SESSION['City'])){

                  echo "<p> ".$_SESSION['City']."</p>";
                }
    ?></li>
<li><img src="phone-42-256.png" width="15"> &nbsp 
<?php
                if (isset($_SESSION['Phone'])){

                  echo "<p> ".$_SESSION['Phone']."</p>";
                }
    ?></li>
<li><img src="mail.png" width="15"> &nbsp 
<?php
                if (isset($_SESSION['Email'])){

                  echo "<p> ".$_SESSION['Email']."</p>";
                }
    ?></li> 
<br>
</ul> </div>

<div class="Right">

    <ul type="none">
      <br>
      <br>
        <li> <font color="orange" size="5" >PROFILE</font></li>
        
        <li>
        <?php
                if (isset($_SESSION['Profile'])){

                  echo "<p> ".$_SESSION['Profile']."</p>";
                }
        ?>
        </li> 
        <br>
        <br>
        <li> <font color="orange" size="5" >ACHIEVEMENTS</font></li>

        <li><img src="ach.png" width=20px>

        <?php
                if (isset($_SESSION['Achievements'])){

                  echo "<p> ".$_SESSION['Achievements']."</p>";
                }
        ?>
        
        <br>
        <br>
        <li> <font color="orange" size="5" >EXPERIENCE</font></li>

        <?php
                if (isset($_SESSION['Experience'])){

                  echo "<p> ".$_SESSION['Experience']."</p>";
                }
    ?>

        
    </ul>
    
</div>

<!-- <div class="ExtraSpace_1">
<br>
</div> -->

<div class="ExtraSpace_2">
    <br>
    </div>
 
       
    </body>
</html>



