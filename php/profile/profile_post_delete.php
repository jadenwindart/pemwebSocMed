<?php
    include "../database/dbconnect.php";

    if(!empty($_POST)) {
        $post_id = $_POST['button']; var_dump($post_id);
       
        //Delete Comment related to Post
        $query = "DELETE FROM comment WHERE post_id={$post_id};";
        $db->query($query);

        //Delete the Post
        $query = "DELETE FROM post WHERE post_id={$post_id};";
        $db->query($query);

        $db->close();
    }

    header("Location: ../../");
?>