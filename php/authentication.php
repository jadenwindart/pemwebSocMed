<?php
    function generateRandChar(){
        $char = array_merge(range('a','z'),range('A','Z'));
        return $char[rand(0,count($char)-1)];
    }

    function generateSalt(){
        $time = time();
        $lenTime = strlen(decbin($time));
        $time = ($lenTime < 32 ) ? $time << (32-$lenTime) : $time >> ($lenTime - 32);
        $currSalt = '';
        $temp = $time;
        for($j = 0 ; $j < 2 ; $j++){
            for($i = 0 ; $i < strlen(decbin($time))/8 ; $i++){
                $currSalt .= chr(($temp%224) + 32);
                $temp >>= 8;
            }
            $time ^= rand(0,2147483647);
            $time <<= 32-strlen(decbin($time));
            $temp = $time;
        }
        return $currSalt;
    }
    include 'database/dbconnect.php';
    if($_SERVER['REQUEST_METHOD'] == "POST" ){
        if($_POST['action'] == 'login'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $email = mysqli_real_escape_string($email);
        }
        else if($_POST['action'] == 'register'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = mysqli_real_escape_string($db,$email);
            $password = mysqli_real_escape_string($db,$password);
            if(strlen($password) < 8){
                echo "Your password length must 8 or greater";
                exit;
            }
            $salt = generateSalt();
            $passHash = hash("sha2",$password);
        }
    }
?>