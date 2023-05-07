<?php
    session_start();
    
    $_SESSION["authentication"] = false;
    unset($_SESSION['captcha']);
    unset($_SESSION["userid"]);
    unset($_SESSION["userimage"]);
    unset($_SESSION["username"]);
    unset($_SESSION["email"]);
    unset($_SESSION['existing']);
    unset($_SESSION['code']);
    unset($_SESSION['usertype']);
    $_SESSION["login"] = "d";
    header("Location:index.php");
?>