<?php

class SignupContr extends Signup{

    private $fname;
    private $lname;
    private  $screen;
    private $date;
    private $gender;
    private $country;
    private $email;
    private $phone;
    private $password;
    private $confirmPass;
    private $agree;

    public function __construct($fname ,$lname,$screen,$date,$gender,$country,$email,$phone,$password,$confirmPass,$agree){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->screen = $screen;
        $this->date = $date;
        $this->gender = $gender;
        $this->country = $country;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->confirmPass = $confirmPass;
        $this->agree = $agree;
        
    }

    public function signupUser(){
        if ( $this->emptyInput()==false) {
            echo "Empty Input<br>";
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        if (!$this->invalidEmail()==false) {
            echo "invalid Email<br>";
            header("Location: ../index.php?error=invalidEmail");
            exit();
        }
        if ($this->passMatch()==false) {
            echo "password Does Not Match <br>";
            header("Location: ../index.php?error=passwordDoesNotMatch");
            exit();
        }
        if ($this->emailcheck()==false) {
            echo "Email Taken<br>";
            header("Location: ../index.php?error=emailtaken");
            exit();
        }
        $this->setUser($this->fname,$this->lname,$this->screen,$this->date,$this->gender,$this->country,$this->email,$this->phone,$this->password);
    }
    
    private function emptyInput(){
        $result = true;
            if(empty( $this->agree )||empty($this->fname)||empty($this->lname)||empty($this->screen)||empty($this->date)||empty($this->gender)||empty($this->country)||empty($this->email)||empty($this->phone)||empty($this->password)||empty($this->confirmPass)){
                $result = false;
            }
        return $result;
    }

    private function invalidEmail(){
        $result=true;
        if( filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }

    private function passMatch(){
        $result=true;
        if($this->password !== $this->confirmPass){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }

    private function emailcheck(){
        $result=true;
        if(!$this->checkUser($this->email,$this->password)){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }

}