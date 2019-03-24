<?php
    class Comment {
        private $id;
        private $username;
        private $comment;
        private $comment_time;

        public function __construct($id, $username, $comment, $comment_time) {
            $this->id = $id;
            $this->username = $username;
            $this->comment = $comment;
            $this->comment_time = $comment_time;
        }
        public function __destruct() {}

        public function getId() {
            return $this->id;
        }
        public function getUsername() {
            return $this->username;
        }
        public function getComment() {
            return $this->comment;
        }
        public function getCommentTime() {
            return $this->comment_time;
        }

        public function setId($id) {
            $this->id = $id;
        }
        public function setUsername($username) {
            $this->username = $username;
        }
        public function setComment($comment) {
            $this->comment = $comment;
        }
        public function setCommentTime($comment_time) {
            $this->comment_time = $comment_time;
        }
    }

    //Current user visiting
    $visiting_username = "budi_santoso";


    //Database
    // include "./php/database/dbconnect.php";
    include "../database/dbconnect.php";
    

    //Get Post
    $socmed_username = "john_doe";
    $socmed_post_id = 1;
    $col = 'u.first_name, u.last_name, post_content, TIMESTAMPDIFF(minute, p.post_date, NOW()) AS time_diff';
    $table1 = 'post AS p'; $table2 = 'user AS u';
    $query = $db->prepare("SELECT {$col} FROM {$table1} JOIN {$table2} WHERE p.post_id=? AND u.username=?;");
    $query->bind_param('is', $socmed_post_id, $socmed_username);
    $query->execute();
    
    $result = $query->get_result(); 
    $row_post = $result->fetch_assoc();
    //var_dump($row_post);
    $post_content = $row_post['post_content'];
    $name = $row_post['first_name'].' '.$row_post['last_name'];
    $post_time = $row_post['time_diff'];
    

    //Get Comment
    $col = 'c.comment_id, u.first_name, u.last_name, c.comment, TIMESTAMPDIFF(minute, c.comment_date, NOW()) AS time_diff';
    $table1 = 'comment AS c'; $table2 = 'user AS u';
    $query = $db->prepare("SELECT {$col} FROM {$table1} JOIN {$table2} WHERE c.post_id=? AND u.username=c.username ORDER BY 1;");
    $query->bind_param('i', $socmed_post_id);
    $query->execute();

    $result = $query->get_result();

    while($row_comment = $result->fetch_assoc()) {
        $temp_name = $row_comment['first_name'].' '.$row_comment['last_name'];

        $comment[] = new Comment($row_comment['comment_id'], $temp_name, $row_comment['comment'], $row_comment['time_diff']);
    }
    // var_dump($comment);

    $db->close();

    
    include 'comment_front.php';
?>