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
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = mysqli_real_escape_string($db,$username);
            echo $username;
            $prepQuery = $db->prepare("SELECT password , salt from login WHERE username=?");
            if(!$prepQuery){
                die($db->error);
            }
            if(!$prepQuery->bind_param("s",$username)){
                die($db->error);
            }
            if(!$prepQuery->execute()){
                die($db->error);
            }
            if(!$prepQuery->bind_result($passHash,$salt)){
                die($db->error);
            }
            while($prepQuery->fetch()){
                echo "in";
                $passInput = hash("sha256",$password.$salt);
                if($passHash === $passInput){
                    echo "Success Login";
                    exit;
                }
            }
            echo "Failed Login";
        }
        else if($_POST['action'] == 'register'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $username = mysqli_real_escape_string($db,$username);
            $password = mysqli_real_escape_string($db,$password);
            if(strlen($password) < 8){
                echo "Your password length must 8 or greater";
                exit;
            }
            $salt = generateSalt();
            $passHash = hash("sha256",$password.$salt);
            $prepQuery = $db->prepare("INSERT INTO user VALUES(?,?,?,NULL,NULL)");
            if(!$prepQuery){
                die($db->error);
            }
            if(!$prepQuery->bind_param("sss",$username,$firstName,$lastName)){
                die($db->error);
            }
            if(!$prepQuery->execute()){
                die($db->error);
            }
            $prepQuery = $db->prepare("INSERT INTO login VALUES(?,?,?)");
            if(!$prepQuery){
                die($db->error);
            }
            if(!$prepQuery->bind_param("sss",$username,$passHash,$salt)){
                die($db->error);
            }
            if(!$prepQuery->execute()){
                die($db->error);
            }
            $prepQuery->close();
        }
    }
?>