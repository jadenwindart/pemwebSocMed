<?php
    if(isset($_POST)) {
        session_start();

        include "../database/dbconnect.php";
        // $hostname = 'localhost';
        // $username = 'root';
        // $password = '';
        // $dbname = 'uts';

        // $db = new mysqli($hostname, $username, $password, $dbname);

        $socmed_username = $_SESSION['username']; //var_dump($user_id);
        $socmed_post_id = $_SESSION['post_id']; //var_dump($post_id);
        $comment = strip_tags($_POST['comment']); //var_dump($comment);
        $query = $db->prepare("INSERT INTO comment(post_id, username, comment) VALUES (?, ?, ?);");
        $query->bind_param('iss', $socmed_post_id, $socmed_username, $comment);
        $query->execute();

        $db->close();
    }

    header('Location: comment_back.php')
?>