<?php
    include "head.php";

    session_start();
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }
    echo "Welcome ", $_SESSION['login'], "<br>";
    echo "Your password is ", $_SESSION['password'], "<br>";
    echo "Your email is ", $_SESSION['email'], "<br>";
    echo "Your age is ", $_SESSION['age'], "<br>";
    echo "Your gender is ", $_SESSION['gender'];
    

    include "footer.php";
?>