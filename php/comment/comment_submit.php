<?php
    if(isset($_POST)) {

        // include "./php/database/dbconnect.php";
        include "../database/dbconnect.php";

        
        $socmed_username = $_POST['visiting_username']; //var_dump($socmed_username);
        $socmed_post_id = $_POST['socmed_post_id']; //var_dump($socmed_post_id);
        $comment = strip_tags($_POST['comment']); //var_dump($comment);

        if(!empty($comment)) {
            $query = $db->prepare("INSERT INTO comment(post_id, username, comment, comment_date) VALUES (?, ?, ?, NOW());");
            $query->bind_param('iss', $socmed_post_id, $socmed_username, $comment);
            $query->execute();
    
            $db->close();
        }
    }

    header('Location: comment_back.php')
?>