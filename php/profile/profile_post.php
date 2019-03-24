<?php
    include "../database/dbconnect.php";

    if(isset($_POST)) {
        $username = $_POST['username']; //var_dump($username);
        $post_content = $_POST['post_content']; //var_dump($post_content);

        $col = "username, post_content, post_date";
        $query = $db->prepare("INSERT INTO post({$col}) VALUES (?, ?, NOW());");
        $query->bind_param("ss", $username, $post_content);
        $query->execute();

        $db->close();
    }

    header("Location: ../../");
?>