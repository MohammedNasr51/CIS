<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {

            $email = $_POST["email"];
            $password = $_POST["Password"];
            require_once("database.php");
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);


            if ($user){
                if (password_verify($password,$user["password"])){
                    session_start();
                    $_SESSION["user"] = "YES";
                    header("Location: index.php");
                    die();
                }else{
                    echo"<div class='alert alert-danger'>Password Dosn't Match</div>";
                }
            }else{
                echo"<div class='alert alert-danger'>Email Dosn't Match</div>";
            }
        }

        ?>
        <h1 class ="forms">Login Form</h1>
        <br>
        <form action="login.php" method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="Password" placeholder="Password" maxlength="15"
                    minlength="8">
            </div>
            <div class="form-btn">
                <input class="btn btn-primary" type="submit" value="Login" name="login"></input>
            </div>
        </form>
        <br>
        <div><p>Not Register Yet  <a href ="registeration.php"> Register Here</a></p></div>
    </div>
</body>

</html>