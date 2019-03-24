<?php 
    session_start();
    include "../php/database/dbconnect.php";
    if(isset($_POST['Description'])){
        $description = htmlspecialchars(mysqli_real_escape_string($db,$_POST['Description']));
        var_dump($description);
        $query = $db->prepare("UPDATE user set description=? WHERE username=? ");
        $query->bind_param("ss", $description,$_SESSION['username']);
        $query->execute();
    }
    header("Location:../index.php");
?>