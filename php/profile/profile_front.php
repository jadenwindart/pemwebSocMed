<?php
  if($user->getProfilePicture() == NULL){
    $profPict = "image/no_image.png";
  }
  else{
    $profPict = $user->getProfilePicture();
  }
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="image/favicon.png" sizes="16x16" type="image/png">
</head>


<title>Profile</title>
<meta charset="UTF-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->
<?php include "./php/template/header.php"; ?>

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
        <a class="navbar-brand" href="index.php">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <!-- <li><a href="#profile">Profile</a></li>
          <li><a href="#message">Message</a></li> -->

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
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
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
          <h3 class="w3-center"><b><?php echo $user->getName(); ?></b></h3>
          <p class="w3-center"><img src="<?php echo $profPict?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar" id="profPic"></p>
          <hr>
          <p>
            <?php if($user->getUsername() == $_SESSION['username']) echo '<i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme" id="description"></i>';?>
            Add/Edit Description
          </p>
          <!-- <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p> -->
          <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $user->getBirthDate() ?></p>
          <div style="word-wrap: break-word">
              <p><b><?php echo $user->getDescription();?></b></p>
          </div>
        </div>
      </div>
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">How's your feeling?</h6>
              <form action="./php/profile/profile_post.php" method="post">
                <input type="text" name="post_content" class="w3-input w3-border w3-padding" required><br>
                <input type="hidden" name="username" <?php echo "value='".$user->getUsername()."'"; ?>>
                <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="page-header"></h2>
            <section class="comment-list">
              <!-- Comments -->
              <?php
              if(!empty($post)) {
                for($i = 0; $i < sizeof($post); $i++) {
                  if($post[$i]->getProfilePicture() == NULL){
                    $profPict = "image/no_image.png";
                  }
                  else{
                    $profPict = $post[$i]->getProfilePicture();
                  }
                  echo "<article class='row'>";
                    echo "<div class='col-md-2 col-sm-2 hidden-xs'>";
                      echo "<figure class='thumbnail'>";
                        echo "<img class='img-responsive' src='". $profPict ."'/>";
                        echo "<figcaption class='text-center'>".$post[$i]->getName()."</figcaption>";
                      echo "</figure>";
                    echo "</div>";
                    echo "<div class='col-md-10 col-sm-10'>";
                      echo "<div class='panel panel-default arrow left'>";
                        echo "<div class='panel-body'>";
                          echo "<header class='text-left'>";
                            echo "<div class='row'>";
                              echo "<div class='col-md-10 col-sm-10 comment-user'>";
                                echo "<h4><b>".$post[$i]->getName()."</b></h4>";
                              echo "</div>";
                              echo "<div class='col-md-2 col-sm-2'>";
                                      //Deleting post button
                                      if($post[$i]->getUsername() == $user->getUsername()) {
                                        echo "<form action='./php/profile/profile_post_delete.php' method='post'>";
                                          echo "<p class='text-right'>";
                                            echo "<button type='submit' name='button' value='".$post[$i]->getPostId()."' class='w3-btn fa fa-close' onClick='return confirm(\"Are you sure you want to delete?\")'></button>";
                                          echo "</p>";
                                        echo "</form>";
                                      }
                              echo "</div>";
                            echo "</div>";
                            echo "<p class='comment-date'><i class='fa fa-clock-o'></i> ";
                                    timeStamp($post[$i]->getPostTime());
                            echo "</p>";
                            echo "</header>";
                            echo "<br>";
                          echo "<div class='comment-post'>";
                            echo "<p>";
                              echo $post[$i]->getPostContent();
                            echo "</p>";
                          echo "</div>";
                            echo "<form action='./php/comment/comment_back.php' method='post'>";
                              echo "<p class='text-right'>";
                                // echo "<input type='hidden' name='visiting_username' value='".$user->getUsername()."'>";
                                echo "<input type='hidden' name='selected_post_id' value='".$post[$i]->getPostId()."'>";
                                echo "<button type='submit' name='button' class='w3-button w3-border'><i class='fa fa-reply'></i> reply</button>";
                              echo "</p>";
                            echo "</form>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                  echo "</article>";
                }
              }
              ?>
            </section>
          </div>
        </div>
      </div>
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <!-- Search User -->
        <form action='./php/search/search_back.php' method='post'>
            <div class='w3-container'>
              <input type='text' name='search_user' class='w3-input w3-border' placeholder='Search User' required><br>
              <button type='submit' class='w3-button w3-theme'><i class='fa fa-search'></i> Search</button>
            </div>
        </form>
      </div>

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
<!-- Modal -->
<div id="modalPic" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="php/profPic_insert.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Insert Profile Picture</h4>
        </div>
        <div class="modal-body">
          <p>Insert Picture Here</p>
          <input type="file" name="Picture" id="Picture">
        </div>
        <div class="modal-footer">
          <input type="submit" value="Confirm" class="btn btn-primary" name="submit">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalDesc" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="php/description_update.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Insert Your Description</h4>
        </div>
        <div class="modal-body">
          <p>Insert Description Here</p>
          <textarea name="Description" id="Description" class='w3-input w3-border' style="resize:none"></textarea>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Confirm" class="btn btn-primary" name="submit">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>

  </div>
</div>

</body>
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

$('#profPic').click(function(){
  $('#modalPic').modal({
    show : 'true',
    backdrop :"false"
  });
  $('#modalPic').on('shown.bs.modal',function(e){
    $('.modal-backdrop').remove();
  })
})

$('#description').click(function(e){
  $('#modalDesc').modal({
    show : 'true',
    backdrop :"false"
  });
  $('#modalDesc').on('shown.bs.modal',function(e){
    $('.modal-backdrop').remove();
  })
})
</script>

<?php
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
