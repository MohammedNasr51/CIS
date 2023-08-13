<?php

class Login extends Dbh
{


    protected function getUser($email, $password)
    {
        $stmt = $this->connect()->prepare('SELECT pass FROM users WHERE email=? OR pass=?');
        if (!$stmt->execute(array($email, $password))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
        }
        $passhahsed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPass = password_verify($password, $passhahsed[0]["pass"]);
        if ($checkPass == false) {
            $stmt = null;
            header("Location: ../index.php?error=wrong_password");
            exit();
        } else {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email=? AND pass=?');
            if (!$stmt->execute(array($email, $password))) {
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["useremail"] = $user[0]["email"];
            $stmt = null;

        }

        $stmt = null;
    }
}