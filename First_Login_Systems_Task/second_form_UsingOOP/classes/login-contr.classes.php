<?php

class LoginContr extends Login{
    private $email;
    private $password;

    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;

    }

    public function loginUser(){
        if ( $this->emptyInput()==false) {
            echo "Empty Input<br>";
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->email,$this->password);
    }



private function emptyInput(){
    $result = true;
        if(empty($this->email)||empty($this->password)){
            $result = false;
        }
    return $result;
}

}