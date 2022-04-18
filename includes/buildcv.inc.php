<?php




if (isset($_POST["submit"])){

    $FullName = $_POST["FullName"];
    $Major = $_POST["Major"];
    $Profile = $_POST["Profile"];
    $GeneralSkills = implode(",", $_POST["General_skills"]);
    $MajorSkills = implode(",", $_POST["MajorSkills"]);
    $Languages = implode(",", $_POST["Languages"]);
    $Achievements = implode(",", $_POST["Achievements"]);
    $Experience = implode(",", $_POST["Experience"]);
    $Phone = $_POST["Phone"];
    $Email = $_POST["Email"];
    $City = $_POST["City"];
    
    

    require_once 'dph.inc.php';
    require_once 'functions.inc.php';
    
    $query =" INSERT INTO userscvdata (FullName, Major, Profile, GeneralSkills, MajorSkills, Languages, Achievements, Experiences, Phone, Email, City) VALUES ('$FullName', '$Major', '$Profile', '$GeneralSkills', '$MajorSkills', '$Languages', '$Achievements', '$Experience', '$Phone', '$Email', '$City' )";
    mysqli_query($conn, $query);


    session_start();
    $_SESSION['userId']=  $userId;
    // $_SESSION['FullName']=  $FullName;
    // $_SESSION['Major']=  $Major;
    // $_SESSION['Profile']=  $Profile;
    // $_SESSION['GeneralSkills']=  $GeneralSkills;
    // $_SESSION['MajorSkills']=  $MajorSkills;
    // $_SESSION['Languages']=  $Languages;
    // $_SESSION['Achievements']=  $Achievements;
    // $_SESSION['Experience']=  $Experience;
    // $_SESSION['Phone']=  $Phone;
    // $_SESSION['Email']=  $Email;
    // $_SESSION['City']=  $City;

    header("location: ../CV.php");
    exit();
}