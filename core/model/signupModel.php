<?php

class SignupModel extends Dbh {

   
    protected function setUser($name, $email, $pwd, $yyyy, $mm, $dd){

        $stmt = $this->connect()->prepare('INSERT INTO users (users_name, users_email, users_pwd, users_bday) VALUES (?,?,?,?)');

        $bdate = date("Y-m-d", mktime(0, 0, 0, $mm, $dd, $yyyy));

        // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


        if (!$stmt->execute(array($name, $email, $pwd, $bdate))) {
            $stmt = null;
            header("location: ../500.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($name, $email){

        $stmt = $this->connect()->prepare('SELECT users_name FROM users WHERE users_name = ? OR users_email = ?');

        if (!$stmt->execute(array($name, $email))) {
            $stmt = null;
            header("location: ../500.php?error=stmtfailed");
            
            exit();
        }
        $resultCheck = '';

        if($stmt->rowCount() == 0){
            $resultCheck = true;
        }
        else{
            $resultCheck = false;
        }
        return $resultCheck;
    }

}