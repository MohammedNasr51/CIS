<?php



if (isset($_POST["submit"])) {

    // grab the data
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $screen = $_POST["screen_name"];
    $date = $_POST["Date"];
    $gender = $_POST["gender"];
    $country  = $_POST["country"];
    $email = $_POST["email"];
    $phone = $_POST["Phone"];
    $password = $_POST["Password"];
    $confirmPass = $_POST["confirm_Password"];
    $agree = $_POST["agree"];

    //instantiate the signup controller
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php"; 
    include "../classes/signup-contr.classes.php";
    
    $signup = new SignupContr($fname ,$lname,$screen,$date,$gender,$country,$email,$phone,$password,$confirmPass,$agree);

    //Running errer handlers and user signup 

    $signup-> signupUser(); 

    //Going to back to front page
    
    header("Location: ../index.php?error=none");

}