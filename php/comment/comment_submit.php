<?php
    if(isset($_POST)) {
        session_start();

        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'uts';

        $db = new mysqli($hostname, $username, $password, $dbname);

        $user_id = $_SESSION['user_id']; //var_dump($user_id);
        $post_id = $_SESSION['post_id']; //var_dump($post_id);
        $comment = $_POST['comment']; //var_dump($comment);
        $query = "INSERT INTO comment(post_id, user_id, comment) VALUES ({$post_id}, {$user_id}, '{$comment}');";

        $db->query($query);

        $db->close();
    }

    header('Location: comment_back.php')
?>