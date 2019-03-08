<?php
    session_start();
    if(!isset($_SESSION['SID'])){
        include 'php/login.php';
    }
?>