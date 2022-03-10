<?php

class signupController extends SignupModel {

    private $name;
    private $email;
    private $pwd;
    private $mm;
    private $yyyy;
    private $dd;

    public function __construct($name, $email, $pwd, $yyyy, $mm, $dd) {
        $this->name = $name;
        $this->pwd = $pwd;
        $this->email = $email;
        $this->yyyy = $yyyy;
        $this->mm = $mm;
        $this->dd = $dd;
    }

    public function signupUser(){

        if($this->emptyInput() == false){
            header("location: ../registration.php?error=emptyinput");
            exit();
        }
    
        if($this->invalidName() == false){
         header("location: ../registration.php?error=name");
         exit();
        }
    
        if($this->invalidEmail() == false){
         header("location: ../registration.php?error=email");
         exit();
        }
    
        if($this->uidTakenCheck() == false){
         header("location: ../registration.php?error=useroremailtaken");
         exit();
        }
    
        else{
            
            $this->setUser($this->name, $this->email, $this->pwd, $this->yyyy, $this->mm, $this->dd);
        }
     }

    private function emptyInput() {
        $result = '';
        if(empty($this->name) || empty($this->pwd) || empty($this->email) ){
            $result = false;
    }

    else{
        $result = true;
    }

    return $result;
    }

    private function invalidName() {
        $result = '';
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->name)){
            $result = false;
    }

    else{
        $result = true;
    }

    return $result;
    }

    private function invalidEmail() {
        $result = '';
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
    }

    else{
        $result = true;
    }

    return $result;
    }

    private function uidTakenCheck() { 
        $result = '';
        if(!$this->checkUser($this->name, $this->email)) { 
            $result = false; 
        } 
        else { 
            $result = true; 
        } 
        return $result; 
    }
    
}