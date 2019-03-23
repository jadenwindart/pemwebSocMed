<?php
    session_start();
    if(!isset($_SESSION['username'])){
        include 'php/login.php';
    }
    else{
        include 'php/profile/profile_back.php';
    }
?>