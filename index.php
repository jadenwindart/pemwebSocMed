<?php
    session_start();
    if(!isset($_SESSION['username'])){
        include 'php/login.php';
    }
    else{
        include 'php/profile.php';
    }
?>