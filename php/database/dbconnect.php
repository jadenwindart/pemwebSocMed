<?php
    $hostname = "localhost";
    $database = "uts";
    $username = "root";
    $password = "root";

    $db = new mysqli($hostname,$username,$password,$database);
    if(!$db){
        echo $db->error;
    }
?>