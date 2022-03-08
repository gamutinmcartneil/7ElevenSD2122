<?php

class LoginModel extends Dbh {

    protected function getUser($email, $pwd) {

        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_name = ? OR users_email = ?;');

        if (!$stmt->execute(array($email, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() != 0){
            $stmt = null;
            header("location: ../login.php?error=usernotfound");
            exit();
        }
        
        // $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);
        $checkPwd = $pwd;

        if($checkPwd == false){
            $stmt = null;
            header("location: ../login.php?error=wrongpassword");
            echo "<p>Password</p>";
            exit();
        }

        elseif($checkPwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_name = ? or users_email = ? AND users_pwd = ?');

            if(!$stmt->execute(array($email, $email, $pwd))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../login.php?error=usersnotfound");
                $this->errMsg();
                exit();
            }

           else{
            date_default_timezone_set("Asian/Taipei");
             $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
             session_start();
             $_SESSION["userid"] = $user[0]["users_id"];
             $_SESSION["username"] = $user[0]["users_name"];
             $_SESSION["usermail"] = $user[0]["users_email"];
             $_SESSION['auth'] = true;
             $_SESSION['start'] = time();
             $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
             $stmt = null;
           }

        }

        $stmt = null;
    }

    public function errMsg()
    {
        echo "okay na!!!";
    }
    
}