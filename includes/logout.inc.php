<?php

if (isset($_POST["submit"])) {
    session_start();
    session_unset();
    session_destroy();

    //going to back to front page
    header("location: ../index.php");
}
