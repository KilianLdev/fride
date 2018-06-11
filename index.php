<?php
include_once "db.php";
    if(isset($_GET['logout'])) {
       setcookie("mail", "", time() - 3600, "/");
       setcookie("psw", "", time() - 3600, "/");

       session_destroy();

       header("Location: login.php");
     }
include_once "nav.php";
?>
