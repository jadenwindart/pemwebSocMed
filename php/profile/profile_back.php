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


    include 'profile_front.php';
?>