<?php
    Class User {
        private $username, $first_name, $last_name, $description, $profile_picture;

        public function __construct($username, $first_name, $last_name, $description, $profile_picture) {
            $this->username = $username;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->description = $description;
            $this->profile_picture = $profile_picture;
        }

        public function __destruct() {}

        
        public function getUsername() {
            return $this->username;
        }

        public function getFirstName() {
            return $this->first_name;
        }

        public function getLastName() {
            return $this->last_name;
        }

        public function getName() {
            return $this->first_name." ".$this->last_name;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getProfilePicture() {
            return $this->profile_picture;
        }


        public function setUsername($username) {
            $this->username = $username;
        }

        public function setFirstName($first_name) {
            $this->first_name = $first_name;
        }

        public function setLastName($last_name) {
            $this->last_name = $last_name;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function setProfilePicture($profile_picture) {
            $this->profile_picture = $profile_picture;
        }
    }

    class Post {
        private $post_id, $username, $name, $post_content, $post_time;

        public function __construct($post_id, $username, $name, $post_content, $post_time) {
            $this->post_id = $post_id;
            $this->username = $username;
            $this->name = $name;
            $this->post_content = $post_content;
            $this->post_time = $post_time;
        }

        // public function __construct($post_id, $username, $name, $post_content) {
        //     $this->post_id = $post_id;
        //     $this->username = $username;
        //     $this->name = $name;
        //     $this->post_content = $post_content;
        // }

        public function __destruct() {}

        public function getPostId() {
            return $this->post_id;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getName() {
            return $this->name;
        }

        public function getPostContent() {
            return $this->post_content;
        }

        public function getPostTime() {
            return $this->post_time;
        }

        public function setPostId($post_id) {
            $this->post_id = $post_id;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setPostContent($post_content) {
            $this->post_content = $post_content;
        }

        public function setPostTime($post_time) {
            $this->post_time = $post_time;
        }
    }


    //Database
    include "./php/database/dbconnect.php";


    $username = $_SESSION['username'];

    //Get User Details
    $query = $db->prepare("SELECT * FROM user WHERE username=?;");
    $query->bind_param("s", $username);
    $query->execute();

    $result = $query->get_result();
    $row_user = $result->fetch_assoc();
    
    $user = new User($row_user['username'], $row_user['first_name'], $row_user['last_name'], $row_user['description'], $row_user['profile_picture']);
    //var_dump($user);


    //Get Posts
    $col = "p.post_id, u.username, u.first_name, u.last_name, p.post_content, TIMESTAMPDIFF(minute, p.post_date, NOW()) AS time_diff";
    $table1 = "post AS p"; $table2 = "user AS u";
    $query = "SELECT {$col} FROM {$table1} JOIN {$table2} WHERE p.username=u.username ORDER BY 1 DESC;";

    $result = $db->query($query);

    while($row_post = $result->fetch_assoc()) {
        $temp = $row_post['first_name']." ".$row_post['last_name'];

        $post[] = new Post($row_post['post_id'], $row_post['username'], $temp, $row_post['post_content'], $row_post['time_diff']);
    }
    // var_dump($post);

    $db->close();

    include "profile_front.php";
?>