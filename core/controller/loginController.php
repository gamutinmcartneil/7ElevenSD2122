<?php

class LoginController extends LoginModel {

private $name;
private $pwd;


    public function __construct( $email, $pwd) {
        $this->email = $email;
        $this->pwd = $pwd;
    }


    public function errMsg()
    {
        $this->errMsg();
    }

    public function loginUser(){

        if($this->emptyInput() == false){
            header("location: ../500.php?error=emptyinput");
            exit();
    }
        else{
        // $this->getUser($this->uid, $this->pwd);
        $this->getUser($this->email, $this->pwd);
        }
 }

    private function emptyInput() {
    $result = '';
    if(empty($this->email) || empty($this->pwd) ){
        $result = false;
}

else{
    $result = true;
}

return $result;
}

}