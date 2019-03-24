<?php
    class Comment {
        private $id;
        private $username;
        private $name;
        private $comment;
        private $comment_time;
        private $profile_picture;

        public function __construct($id, $username, $name, $comment, $comment_time, $profile_picture) {
            $this->id = $id;
            $this->username = $username;
            $this->name = $name;
            $this->comment = $comment;
            $this->comment_time = $comment_time;
            $this->profile_picture = $profile_picture;
        }
        public function __destruct() {}

        public function getId() {
            return $this->id;
        }
        public function getUsername() {
            return $this->username;
        }
        public function getName() {
            return $this->name;
        }
        public function getComment() {
            return $this->comment;
        }
        public function getCommentTime() {
            return $this->comment_time;
        }
        public function getProfilePicture() {
            return $this->profile_picture;
        }

        public function setId($id) {
            $this->id = $id;
        }
        public function setUsername($username) {
            $this->username = $username;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function setComment($comment) {
            $this->comment = $comment;
        }
        public function setCommentTime($comment_time) {
            $this->comment_time = $comment_time;
        }
        public function setProfilePicture($profile_picture) {
            $this->profile_picture = $profile_picture;
        }
    }

    session_start();

    //Current post & user
    if(!empty($_POST)) {
        // $_SESSION['visiting_username'] = $_POST['visiting_username'];
        $_SESSION['selected_post_id'] = $_POST['selected_post_id'];
    }

    $visiting_username = $_SESSION['username'];
    $socmed_post_id = $_SESSION['selected_post_id'];


    if(!empty($visiting_username)) {
        // var_dump($visiting_username);
        // var_dump($socmed_post_id);

        //Database
        // include "./php/database/dbconnect.php";
        include "../database/dbconnect.php";
        

        //Get Post
        $col = 'u.first_name, u.last_name, post_content, TIMESTAMPDIFF(minute, p.post_date, NOW()) AS time_diff, u.profile_picture';
        $table1 = 'post AS p'; $table2 = 'user AS u';
        $query = $db->prepare("SELECT {$col} FROM {$table1} JOIN {$table2} ON p.usernameFrom=u.username WHERE p.post_id=?;");
        $query->bind_param('i', $socmed_post_id);
        $query->execute();
        
        $result = $query->get_result(); 
        $row_post = $result->fetch_assoc();
        //var_dump($row_post);
        $post_content = $row_post['post_content'];
        $name = $row_post['first_name'].' '.$row_post['last_name'];
        $post_time = $row_post['time_diff'];
        $user_profpic = $row_post['profile_picture'];
        

        //Get Comment
        $col = 'c.comment_id, c.username, u.first_name, u.last_name, c.comment, TIMESTAMPDIFF(minute, c.comment_date, NOW()) AS time_diff, u.profile_picture';
        $table1 = 'comment AS c'; $table2 = 'user AS u';
        $query = $db->prepare("SELECT {$col} FROM {$table1} JOIN {$table2} WHERE c.post_id=? AND u.username=c.username ORDER BY 1;");
        $query->bind_param('i', $socmed_post_id);
        $query->execute();

        $result = $query->get_result();

        while($row_comment = $result->fetch_assoc()) {
            $temp_name = $row_comment['first_name'].' '.$row_comment['last_name'];

            $comment[] = new Comment($row_comment['comment_id'], $row_comment['username'], $temp_name, $row_comment['comment'], $row_comment['time_diff'], $row_comment['profile_picture']);
        }
        // var_dump($comment);

        $db->close();

        
        include 'comment_front.php';
    }
    else {
        echo "404 Not Found";
    }
?>