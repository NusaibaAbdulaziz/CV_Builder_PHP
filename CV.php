<?php
 session_start();
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
               height:80.6%;
              
               
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
            height:50px;
           }




        </style>
    </head>
    <body class="text-secondary" >
      <div class="Top"> 
          <ul type="none" align="center" class="text-light">
            <br>
            <br>
            <br>
            <br>
            <br>
        <li>  <font size="8"  >
        <?php
                if (isset($_SESSION['FullName'])){

                  echo "<p> ".$_SESSION["FullName"]."</p>";
                }
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
        <?php
                if (isset($_SESSION['Achievements'])){

                  echo "<p> ".$_SESSION['Achievements']."</p>";
                }
        ?>
        <li>&emsp;&emsp;<b>TRC PROJECT, AL-Musannah</b></li>
        <li><img src="ach.png" width=20px>&nbsp&nbsp Worked around 2 years (2020-2021) on a project which is</li>
        <li>&emsp;&emsp;funded by The Research Council</li>
        <br>
        <li>&emsp;&emsp;<b>UTAS-IBRA IR4ERA</b></li>
        <li>&emsp;&emsp;Presented a poster titled " School Bus Accident Monitoring</li>
        <li><img src="ach.png" width=20px>&nbsp&nbsp System And Sending Emergency Information Including The</li>
        <li>&emsp;&emsp;Location To The Authorities" in UTAS-IBRA, virtual conference in</li>
        <li>&emsp;&emsp;2021</li>
        <br>
        <li>&emsp;&emsp;<b>ICCET, India</b></li>
        <li>&emsp;&emsp;Shared a paper titled " Optimizing The AC Operation For Energy</li>
        <li><img src="ach.png" width=20px>&nbsp&nbsp Management And AC Failure Monitoring System Through GSM</li>
        <li>&emsp;&emsp;Technology For School Bus" in 9th International Conference on</li>
        <li>&emsp;&emsp;Computing in Engineering & Technology in 2021</li>
        <br>
        <li>&emsp;&emsp;<b>2nd INCET, India</b></li>
        <li>&emsp;&emsp;Shared a paper titled " An Advanced Public Transport With</li>
        <li><img src="ach.png" width=20px>&nbsp&nbsp Tracking The Vehicle And Sending The Location Using GSM</li>
        <li>&emsp;&emsp;And GPS During Pandemic Situations" in IEEE X-Plore in 2021</li>
        <br>
        <li>&emsp;&emsp;<b>IEEE Online Competition, Oman</b></li>
        <li><img src="ach.png" width=20px>&nbsp&nbsp Won a first place in IEEE Oman online competition for the best</li>
        <li>&emsp;&emsp;innovative idea to combat the Covid-19 pandemic in 2020</li>
        <br>
        <li>&emsp;&emsp;<b>Omani skills competition, Muscat</b></li>
        <li><img src="ach.png" width=20px>&nbsp&nbsp Participated in an Omani skills competition in mobile robotics in</li>
        <li>&emsp;&emsp;2018</li>
        <br>
        <br>
        <li> <font color="orange" size="5" >EXPERIENCE</font></li>

        <?php
                if (isset($_SESSION['Experiences'])){

                  echo "<p> ".$_SESSION['Experiences']."</p>";
                }
    ?>

        
    </ul>
    
</div>

<div class="ExtraSpace_1">
<br>
</div>

<div class="ExtraSpace_2">
    <br>
    </div>
 
       
    </body>
</html>



