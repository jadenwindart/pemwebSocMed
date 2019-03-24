<?php
    $hostname = "localhost";
    $database = "uts";
    $username = "root";
    $password = "";

    $db = new mysqli($hostname,$username,$password,$database);
    if(!$db){
        echo $db->error;
    }
?>