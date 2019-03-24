<?php
    session_start();
    include "../database/dbconnect.php";

    if(!empty($_POST)) {
        $username = $_POST['username']; //var_dump($username);
        $post_content = $_POST['post_content']; //var_dump($post_content);

        if(!empty($post_content)) {
            $col = "username, post_content, post_date,usernameFrom";
            $query = $db->prepare("INSERT INTO post({$col}) VALUES (?, ?, NOW(),?);");
            $query->bind_param("sss", $username, $post_content,$_SESSION['username']);
            $query->execute();
    
            $db->close();
        }
    }

    header("Location: ../../");
?>