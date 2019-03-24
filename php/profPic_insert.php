<?php
    session_start();
    if(!isset($_SESSION['username'])) header("Location : ../index.php");

    $target_dir = "../image/";
    $target_file = $target_dir . basename($_SESSION['username']);
    $uploadOk = 1;
    $imageFileType = "";
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["Picture"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $imageFileType = substr($check["mime"],strpos($check["mime"],"/")+1);
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        unlink("image/".$_SESSION['username']);
        $uploadOk = 0;
    }
    // Check file size
    var_dump($imageFileType);
    if ($_FILES["Picture"]["size"] > 50000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file.".".$imageFileType)) {
            echo "The file ". basename( $_FILES["Picture"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>