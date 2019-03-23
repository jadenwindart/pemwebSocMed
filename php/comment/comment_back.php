<?php
    class Comment {
        private $id;
        private $username;
        private $comment;

        public function __construct($id, $username, $comment) {
            $this->id = $id;
            $this->username = $username;
            $this->comment = $comment;
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

        public function setId($id) {
            $this->id = $id;
        }

        public function setUsername($username) {
            $this->username = $username;
        }
        public function setComment($comment) {
            $this->comment = $comment;
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
    $col = 'u.first_name, u.last_name, post_content';
    $table1 = 'post AS p'; $table2 = 'user AS u';
    $query = $db->prepare("SELECT {$col} FROM {$table1} JOIN {$table2} WHERE p.post_id=? AND u.username=?;");
    $query->bind_param('is', $socmed_post_id, $socmed_username);
    $query->execute();
    
    $result = $query->get_result(); 
    $row_post = $result->fetch_assoc(); //var_dump($row_post);
    $post_content = $row_post['post_content'];
    $name = $row_post['first_name'].' '.$row_post['last_name'];
    

    //Get Comment
    $col = 'c.comment_id, u.first_name, u.last_name, c.comment';
    $table1 = 'comment AS c'; $table2 = 'user AS u';
    $query = $db->prepare("SELECT {$col} FROM {$table1} JOIN {$table2} WHERE c.post_id=? AND u.username=c.username ORDER BY 1;");
    $query->bind_param('i', $socmed_post_id);
    $query->execute();

    $result = $query->get_result();

    while($row_post = $result->fetch_assoc()) {
        $temp_name = $row_post['first_name'].' '.$row_post['last_name'];

        $comment[] = new Comment($row_post['comment_id'], $temp_name, $row_post['comment']);
    }
    //var_dump($comment);

    $db->close();

    
    include 'comment_front.php';
?>