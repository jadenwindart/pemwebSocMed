<?php
    if(!empty($_POST)) {
        
        // include "./php/database/dbconnect.php";
        include "../database/dbconnect.php";

        $comment_id = $_POST['button'];

        $query = $db->prepare('DELETE FROM comment WHERE comment_id=?;');
        $query->bind_param('i', $comment_id);
        $query->execute();

        $db->close();
    }

    header('Location: comment_back.php')
?>