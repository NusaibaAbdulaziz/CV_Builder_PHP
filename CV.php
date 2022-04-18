<?php
session_start();
if (isset($_SESSION['userId']))

    require_once 'includes/dph.inc.php';
include_once 'includes/buildcv.inc.php';

$conn =  mysqli_connect("localhost", "root", "", "cv_builder");
if ($conn->connect_error)
    die("conneion faild:" . $conn->connect_error);




?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="descripation" content="curriculum vitae">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>CV</title>
    <style>
        body {

            top: 4px;
            bottom: 4px;
            padding-top: 0px;
            margin: auto;
            position: relative;
            width: 900px;
            height: 100%;
            box-shadow: 0 3px 10px rgb(0 0 0/0.4);
            font-family: system-ui, system-ui, sans-serif;
            font-size: 100%;
            background-color: #E6E6E6;

        }

        .Top {
            height: 10%;
            width: 900px;
            background: #6e6e6e;
        }

        .Left {
            background-color: rgb(255, 224, 179);
            
            /* top: 300px;
            bottom:300px;
            left: 0px;
            height: 100%; */

        }

        .Right {
            width: 589.5px;
            background-color: white;
            position: absolute;
            top: 254px;
            right: 0px;
            height: 72.5%;


        }

        .ExtraSpace_1 {
            width: 589px;
            background-color: white;
            position: absolute;
            bottom: 1px;
            right: 1px;
            height: 0.2px;
        }

        .ExtraSpace_2 {
            background-color: rgb(255, 224, 179);
            width: 310px;
            position: absolute;
            left: 0px;
            top: 254px;
            height: 49px;
        }
    </style>
</head>

<body class="text-secondary">
    <div class="Top">
        <ul type="none" class="text-light text-center">
            <br>
            <br>
            <br>
            <br>
            <br>
            <li>
                <font size="8">
                    <?php

                    //   $user = '5';

                    $conn =  mysqli_connect("localhost", "root", "", "cv_builder");
                    if ($conn->connect_error) {
                        die("conneion faild:" . $conn->connect_error);
                    }

                    $user = $_SESSION['userid'];
                    $sql = "SELECT FullName, userId FROM `userscvdata` cd WHERE cd.userId=$user";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo $row["FullName"];
                        }
                    }


                    //    $user = $_SESSION['userId'];
                    //    $sql = "SELECT FullName FROM `userscvdata` cd WHERE cd.userId=$user;"; 
                    //     $query = mysqli_query($conn, $sql);
                    //     $row = $query->fetch_assoc();
                    //     echo $row["FullName"];

                    ?>
                </font>
            </li>
            <li> <i>
                    <?php


                    $user = $_SESSION['userid'];
                    $sql = "SELECT Major FROM `userscvdata` cd WHERE cd.userId=$user;";
                    $query = mysqli_query($conn, $sql);
                    $row = $query->fetch_assoc();
                    echo $row["Major"];

                    ?>
                </i></li>
            <br>
            <br>
            <br>
        </ul>
    </div>

    <div class="Left">
        <br>
        <ul type="none">
            <li>
                <font color="orange" size="5">SKILLS</font>
            </li>
            <p></p>

            <li><b>General</b></li>
            <?php

            $user = $_SESSION['userid'];
            $sql = "SELECT GeneralSkills FROM `userscvdata` cd WHERE cd.userId=$user;";
            $query = mysqli_query($conn, $sql);
            $row = $query->fetch_assoc();
            // echo $row["GeneralSkills"];

            $str = $row["GeneralSkills"];
            $token = strtok($str, ",");

            while ($token !== false) {
                echo "$token<br>";
                $token = strtok(" ");
            }

            ?>
        </ul>

        <ul type="none">
            <li><b>Major</b></li>
            <?php

            $user = $_SESSION['userid'];
            $sql = "SELECT MajorSkills FROM `userscvdata` cd WHERE cd.userId=$user;";
            $query = mysqli_query($conn, $sql);
            $row = $query->fetch_assoc();

            $str = $row["MajorSkills"];
            $token = strtok($str, ",");

            while ($token !== false) {
                echo "$token<br>";
                $token = strtok(" ");
            }

            ?>
        </ul>



        <ul type="none">
            <li><b>Languages</b></li>
            <?php

            $user = $_SESSION['userid'];
            $sql = "SELECT Languages FROM `userscvdata` cd WHERE cd.userId=$user;";
            $query = mysqli_query($conn, $sql);
            $row = $query->fetch_assoc();


            $str = $row["Languages"];
            $token = strtok($str, ",");

            while ($token !== false) {
                echo "$token<br>";
                $token = strtok(" ");
            }

            ?>
        </ul>
        <br>
        <br>
        <br>
        <br>

        <ul type="none">
            <li>
                <font color="orange" size="5">CONTACT</font>
            </li>
            <br>
            <li> <img src="home.png" width="15"> &nbsp
                <?php

                $user = $_SESSION['userid'];
                $sql = "SELECT City FROM `userscvdata` cd WHERE cd.userId=$user;";
                $query = mysqli_query($conn, $sql);
                $row = $query->fetch_assoc();
                echo $row["City"];

                ?></li>
            <li><img src="phone-42-256.png" width="15"> &nbsp
                <?php

                $user = $_SESSION['userid'];
                $sql = "SELECT Phone FROM `userscvdata` cd WHERE cd.userId=$user;";
                $query = mysqli_query($conn, $sql);
                $row = $query->fetch_assoc();
                echo $row["Phone"];

                ?></li>
            <li><img src="mail.png" width="15"> &nbsp
                <?php

                $user = $_SESSION['userid'];
                $sql = "SELECT Email FROM `userscvdata` cd WHERE cd.userId=$user;";
                $query = mysqli_query($conn, $sql);
                $row = $query->fetch_assoc();
                echo $row["Email"];

                ?></li>
            <br>
        </ul>
    </div>

    <div class="Right">

        <ul type="none">
            <br>
            <br>
            <li>
                <font color="orange" size="5">PROFILE</font>
            </li>

            <li>
                <?php
                $user = $_SESSION['userid'];
                $sql = "SELECT Profile FROM `userscvdata` cd WHERE cd.userId=$user;";
                $query = mysqli_query($conn, $sql);
                $row = $query->fetch_assoc();
                echo $row["Profile"];

                ?>
            </li>
            <br>
            <br>
            <li>
                <font color="orange" size="5">ACHIEVEMENTS</font>
            </li>

            

                <?php

                $user = $_SESSION['userid'];
                $sql = "SELECT Achievements FROM `userscvdata` cd WHERE cd.userId=$user;";
                $query = mysqli_query($conn, $sql);
                $row = $query->fetch_assoc();
                // echo $row["Achievements"];

                $str = $row["Achievements"];
                $token = strtok($str, ",");

                while ($token !== false) {
                    echo "$token <br>";
                    $token = strtok("");
                }

                ?>

                <br>
                <br>
            <li>
                <font color="orange" size="5">EXPERIENCE</font>
            </li>

            <?php
            $user = $_SESSION['userid'];
            $sql = "SELECT Experiences FROM `userscvdata` cd WHERE cd.userId=$user;";
            $query = mysqli_query($conn, $sql);
            $row = $query->fetch_assoc();
            

            $str = $row["Experiences"];
            $token = strtok($str, ",");

            while ($token !== false) {
                echo "$token<br>";
                $token = strtok(" ");
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