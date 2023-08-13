<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        ?>
        <h1 class ="forms">Login Form</h1>
        <br>
        <form action="includes/login.inc.php" method="post">
            <div class="form-group">
            <label for="email">E-mail</label>
                <input class="" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
            <label for="Password">Password</label>
                <input class="" type="password" name="Password" placeholder="Password" maxlength="15"
                    minlength="8">
            </div>
            <div class="form-btn">
                <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </div>
        </form>
        <br>
        <div><p>Not Signed Up Yet  <a href ="index.php"> Signed Up Here</a></p></div>
    </div>

    <?php 
    if(isset($_SESSION["useremail"])){
        header('Location: acount.php');
    }
    
    ?>
</body>

</html>