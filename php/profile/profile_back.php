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
        private $post_id, $name, $post_content;

        public function __construct($post_id, $name, $post_content) {
            $this->post_id = $post_id;
            $this->name = $name;
            $this->post_content = $post_content;
        }

        public function __destruct() {}

        public function getPostId() {
            return $this->post_id;
        }

        public function getName() {
            return $this->name;
        }

        public function getPostContent() {
            return $this->post_content;
        }

        public function setPostId($post_id) {
            $this->post_id = $post_id;
        }

        public function setUsername($name) {
            $this->name = $name;
        }

        public function setPostContent($post_content) {
            $this->post_content = $post_content;
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
    $col = "p.post_id, u.first_name, u.last_name, p.post_content";
    $table1 = "post AS p"; $table2 = "user AS u";
    $query = "SELECT {$col} FROM {$table1} JOIN {$table2} WHERE p.username=u.username ORDER BY 1;";

    $result = $db->query($query);

    while($row_post = $result->fetch_assoc()) {
        $temp = $row_post['first_name']." ".$row_post['last_name'];

        $posts[] = new Post($row_post['post_id'], $temp, $row_post['post_content']);
    }
    //var_dump($posts);

    $db->close();

    include "profile_front.php";
?>