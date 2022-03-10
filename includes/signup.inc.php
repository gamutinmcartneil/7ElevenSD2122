<?php

if (isset($_POST["submit"])) {

    if (isset($_POST['allow_access']) && $_POST['allow_access'] == 'agree') {

        //Grabiing the data
        $name = $_POST["name"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];
        $mm = $_POST["mm"];
        $yyyy = $_POST["yyyy"];
        $dd = $_POST["dd"];

        include_once "../configure/dbh.php";
        include_once "../core/model/signupModel.php";
        include_once "../core/controller/signupController.php";
        $signup = new signupController($name, $email, $pwd, $yyyy, $mm, $dd);

        // running error ghandler and user signup
         $signup->signupUser();

        //going to back to front page
        header("location: ../login.php");

    } else {

        echo "error";
    }
} else {
    // header("location: ../login.php");
    // exit();
    echo "asdsad";
}
