<?php 

class Signup extends Dbh{
    protected function checkUser($email,$password){
        $stmt = $this-> connect()->prepare('SELECT id FROM users WHERE email = ? OR pass = ?;');
        if (!$stmt->execute(array($email,$password))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultcheck=true;
        if ($stmt->rowCount()>0) {
            $resultcheck=false;
        }else{
            $resultcheck =true;
        } 
        return $resultcheck;
    }

    protected function setUser($fname ,$lname,$screen,$date,$gender,$country,$email,$phone,$password){
        $stmt = $this-> connect()->prepare('INSERT INTO users (fname, lname, scname, pdate, gender, country, email, phone, pass) VALUES (?,?,?,?,?,?,?,?,?)');
        $hashpass = password_hash($password,PASSWORD_DEFAULT);
        
        if (!$stmt->execute(array($fname ,$lname,$screen,$date,$gender,$country,$email,$phone,$hashpass))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}