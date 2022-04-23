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

    $userId = $_SESSION['userId'];
    $query = "SELECT * from usersdatacv WHERE userId=$userId";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows>0) {

        $query = " UPDATE usersdata SET 'FullName = '$FullName', Major = '$Major', Profile = '$Profile', GeneralSkills = '$GeneralSkills', MajorSkills = '$MajorSkills', languages = '$Languages', Achievement = '$Achievements', Experiences = '$Experience', Phone = '$Phone', Email= '$Email', City = '$City' WHERE userid='$userId'";
    
     
    }
    
    else {

        $query =" INSERT INTO userscvdata (userId, FullName, Major, Profile, GeneralSkills, MajorSkills, Languages, Achievements, Experiences, Phone, Email, City) VALUES ( '$userId', '$FullName', '$Major', '$Profile', '$GeneralSkills', '$MajorSkills', '$Languages', '$Achievements', '$Experience', '$Phone', '$Email', '$City' );";


    }

    mysqli_query($conn, $query);
    // session_start();
    
   

    header("location: ../CV.php");
    exit();
}