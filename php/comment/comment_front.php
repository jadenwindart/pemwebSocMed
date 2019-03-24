<!DOCTYPE html>
<html>
<title>Comment</title>
<meta charset="UTF-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->

<?php 
  // include './php/template/header.php';
  include '../template/header.php';  
?>

<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
.navbar {
  margin-bottom: 0;
  border-radius: 0;
}
.jumbotron{
  margin-bottom: 0;
}
</style>
<body class="w3-theme-l5">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="../../">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#profile">Profile</a></li>
          <li><a href="#message">Message</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Social Media Gadungan</h1>
    <p class="lead">Hanyalah suatu Project UTS belaka...</p>

  </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    
  <!-- The Grid -->
  <div class="w3-row">
    <div class="w3-col m2">&nbsp</div>
    <!-- Middle Column -->
    <div class="w3-col m8">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="page-header"></h2>
            <section class="comment-list">
              <article class="row">
                <div class="col-md-2 col-sm-2 hidden-xs">
                  <figure class="thumbnail">
                    <img class="img-responsive" src="<?php echo getProfilePic($user_profpic)?>"/>
                    <figcaption class="text-center"><?php echo $name; ?></figcaption>
                  </figure>
                </div>
                <div class="col-md-10 col-sm-10">
                  <div class="panel panel-default arrow left">
                    <div class="panel-body">
                      <header class="text-left">
                        <div class="comment-user"><p style='font-size:200%'><b><?php echo $name; ?></b></p></div>
                        <p><i class="fa fa-clock-o"></i> 
                          <?php
                            timeStamp($post_time);
                          ?>
                        </p>
                      </header>
                      <br>
                      <div class="comment-post">
                        <p style='font-size:120%'><?php echo $post_content; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='row'> 
                <div class='col-md-2 col-sm-2'>&nbsp</div>
                <div class='col-md-2 col-sm-10'>
                  <p style='font-size:150%'><u>Replies</u></p>
                </div>
              </article>
              <!-- Replies -->
              <?php
                if(!empty($comment)) {
                  for($i = 0; $i < sizeof($comment); $i++) {
                    echo "<article class='row'>";
                      echo "<div class='col-md-2 col-sm-2'>&nbsp</div>";
                      echo "<div class='col-md-10 col-sm-10'>";
                        echo "<div class='col-md-2 col-sm-2 hidden-xs'>";
                          echo "<figure class='thumbnail'>";
                            echo "<img class='img-responsive' src='".getProfilePic($comment[$i]->getProfilePicture())."'/>";
                            echo "<figcaption class='text-center' style='font-size:80%'>".$comment[$i]->getName()."</figcaption>";
                          echo "</figure>";
                        echo "</div>";
                        echo "<div class='col-md-10 col-sm-10'>";
                          echo "<div class='panel panel-default arrow left'>";
                            echo "<div class='panel-body'>";
                              echo "<header class='text-left'>";
                                echo "<div class='row'>";
                                  echo "<div class='col-md-10 col-sm-10 comment-user'><p style='font-size:120%'><b>".$comment[$i]->getName()."</b></p></div>";
                                  echo "<div class='col-md-2 col-sm-2'>";
                                      //Deleting comment button
                                      if($visiting_username == $comment[$i]->getUsername()) {
                                        echo "<form action='comment_delete.php' method='post'>";
                                          echo "<p class='text-right'>";
                                            echo "<button type='submit' name='button' value='".$comment[$i]->getId()."' class='w3-btn fa fa-close' onClick='return confirm(\"Are you sure you want to delete?\")'></button>";
                                          echo "</p>";
                                        echo "</form>";
                                      }
                                  echo "</div>";
                                echo "</div>";
                                echo "<p style='font-size:90%'><i class='fa fa-clock-o'></i> ";
                                  timeStamp($comment[$i]->getCommentTime());
                                echo "</p>";
                              echo "</header>";
                              echo "<br>";
                              echo "<div class='comment-post'>";
                                echo "<p>".$comment[$i]->getComment()."</p>";
                              echo "</div>";
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                      echo "</div>";
                    echo "</article>";
                  }
                }
              ?>
              <article class='row'> <!-- Reply Form -->
                <div class='col-md-2 col-sm-2'>&nbsp</div>
                <div class='col-md-10 col-sm-10'>
                  <div class="panel panel-default arrow left">
                    <div class="panel-body">
                      <form class='w3-container' action='comment_submit.php' method='post'>
                        <label for='comment'>Add Comment</label>
                        <textarea class='w3-input w3-border' name='comment' style='resize:none'></textarea><br>
                        <input type='hidden' name='visiting_username' <?php echo "value='".$visiting_username."'"; ?>>
                        <input type='hidden' name='socmed_post_id' <?php echo "value='".$socmed_post_id."'"; ?>>
                        <p class='text-right'><button class='w3-button w3-blue w3-round' type='submit'><i class="fa fa-reply"></i> Reply</button></p>
                      </form>
                    </div>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

      &nbsp

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>
<footer class="text-center">
    <!-- <p>Footer Text</p> -->
</footer>

<?php

  function getProfilePic($path) {
    if($path == NULL){
      return "../../image/no_image.png";
    }
    else{
      return "../../".$path;
    }
  }

  function timeStamp($time) {
    $temp = (int)$time;

    if($temp < 1) {
      echo "Less than a minute ago";
    }
    else if($temp > 1 && $temp < 60) {
      echo $temp;
      echo " minutes ago";
    }
    else if($temp >= 60 && $temp < 1440) {
      echo round($temp / 60);
      echo " hour ago";
    }
    else if($temp >= 1440) {
      echo round($temp / 1440);
      echo " days ago";
    }
  }
?>

</body>
</html> 