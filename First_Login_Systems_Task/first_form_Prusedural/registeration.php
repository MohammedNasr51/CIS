<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
}
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registeration Form</title>
    <meta name="description" content="This is your Registeration form">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        
        if (isset($_POST["submit"])) {
            $fname = $_POST["first_name"];
            $lname = $_POST["last_name"];
            $uname = $_POST["user"];
            $email = $_POST["email"];
            $pass = $_POST["Password"];
            $hashpassword = password_hash($pass, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($fname)) {
                array_push($errors, "First Name is required");
            }
            if (empty($lname)) {
                array_push($errors, "Last Name is required");
            }
            if (empty($uname)) {
                array_push($errors, "Username is required");
            }
            if (empty($email)) {
                array_push($errors, "Email is required");
            }
            if (empty($pass)) {
                array_push($errors, "Password is required");
            }
            require_once("database.php");
            $sql = "SELECT email FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists");
            }


            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class = 'alert alert-danger'>$error</div>";
                }
            } else {
                
                $sql = "INSERT INTO users ( fname,lname ,user_name,email,password) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $uname, $email, $hashpassword);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<div class = 'alert alert-success'>Account Created Successfully</div>";
                    } else {
                        die("Something went wrong");
                    }
                }
            }
        }
        ?>
        <h1 class ="forms">Registeration Form</h1>
        <br>
        <form action="registeration.php" method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="first_name" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="last_name" placeholder="Enter your Last Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="user" placeholder="Enter your User Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="Password" placeholder="Password" maxlength="15"
                    minlength="8">
            </div>
            <div class="form-btn">
                <input class="btn btn-primary" type="submit" value="Register" name="submit"></input>
            </div>
        </form>
        <br>
        <div><p>Already Registered <a href ="login.php">Login Here</a></p></div>
    </div>

</body>

</html>