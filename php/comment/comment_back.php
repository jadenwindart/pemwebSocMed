<?php
    class Comment {
        private $comment_id;
        private $username;
        private $comment;

        public function __construct($username, $comment) {
            $this->username = $username;
            $this->comment = $comment;
        }
        public function __destruct() {}

        public function getUsername() {
            return $this->username;
        }
        public function getComment() {
            return $this->comment;
        }

        public function setUsername($username) {
            $this->username = $username;
        }
        public function setComment($comment) {
            $this->comment = $comment;
        }
    }

    //Current user visiting
    $visiting_user_id = 2;


    //Database
    include "../database/dbconnect.php";
    /*$hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'uts';
    
    $db = new mysqli($hostname, $username, $password, $dbname);*/
    

    //Get Post
    $user_id = 1;
    $post_id = 2;
    $col = 'u.first_name, u.last_name, post_content';
    $table1 = 'post AS p'; $table2 = 'user AS u';
    $query = "SELECT {$col} FROM {$table1} JOIN {$table2} WHERE p.post_id={$post_id} AND u.user_id={$user_id};";
    $result = $db->query($query);
    $row_post = $result->fetch_assoc(); //var_dump($row_post);

    $post_content = $row_post['post_content'];
    $username = $row_post['first_name'].' '.$row_post['last_name'];
    

    //Get Comment
    $col = 'c.comment_id, u.first_name, u.last_name, c.comment';
    $table1 = 'comment AS c'; $table2 = 'user AS u';
    $query = "SELECT {$col} FROM {$table1} JOIN {$table2} WHERE c.post_id={$post_id} AND u.user_id=c.user_id ORDER BY 1;";
    $result = $db->query($query); //var_dump($result);

    while($row_post = $result->fetch_assoc()) {
        $comment[] = new Comment($row_post['first_name'].' '.$row_post['last_name'], $row_post['comment']);
    }
    //var_dump($comment);


    /*//Get Username
    $col = 'first_name, last_name';
    $table = 'user';
    $query = 'SELECT '.$col.' FROM '.$table.' WHERE user_id='.$user_id.';';
    $result = $db->query($query);
    $row_user = $result->fetch_assoc(); //var_dump($row_user);

    $username = $row_user['first_name'].' '.$row_user['last_name'];*/


    session_start();
    $_SESSION['post_id'] = $post_id;
    $_SESSION['user_id'] = $visiting_user_id;

    $db->close();

    include 'comment_front.php';
?>