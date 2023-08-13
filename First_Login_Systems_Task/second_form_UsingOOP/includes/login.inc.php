<?php



if (isset($_POST["submit"])) {

    // grab the data
    $email = $_POST["email"];
    $password = $_POST["Password"];

    //instantiate the signup controller
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $login = new LoginContr($email, $password);

    //Running errer handlers and user signup 

    $login->loginUser();

    //Going to back to front page

    header("Location: ../acount.php?error=none");

}