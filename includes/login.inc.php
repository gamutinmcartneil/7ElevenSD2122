<?php


if(isset($_POST["submit"])){

    //Grabiing the data
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    include_once "../configure/dbh.php";
    include_once "../core/model/loginModel.php";
    include_once "../core/controller/loginController.php";

    $login = new LoginController($email, $pwd);

    print $login->loginUser();

    

}
else{
    // header("location: ../login.php");
    // exit();
    echo "asdsad";
}