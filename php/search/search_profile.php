<?php
  session_start();
  if($user->getProfilePicture() == NULL){
    $profPict = "../../image/no_image.png";
  }
  else{
    $profPict = "../../".$user->getProfilePicture();
  }
?>
<!DOCTYPE html>
<html>
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
<!-- 
Minor Problem: 
  - Icon glyphicon ga ke load
-->
<?php include "../template/header.php"; ?>

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
          <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
          <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
          <div class="w3-row-padding">
          <br>
            <div class="w3-half">
              <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
          </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">How's your feeling?</h6>
              <form action="../profile/profile_post.php" method="post">
                <input type="text" name="post_content" class="w3-input w3-border w3-padding" required><br>
                <input type="hidden" name="username" <?php echo "value='".$_SESSION['username']."'"; ?>>
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
                  echo "<article class='row'>";
                    echo "<div class='col-md-2 col-sm-2 hidden-xs'>";
                      echo "<figure class='thumbnail'>";
                        echo "<img class='img-responsive' src='".$profPict."'/>";
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
                            echo "<form action='../comment/comment_back.php' method='post'>";
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
        <p>ADS</p>
      </div>
      <br>
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>
<footer class="text-center">
    <p></p>
</footer>
<!-- Modal -->
<!-- <div id="modalPic" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">

    Modal content
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
</div> -->

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

// $('#profPic').click(function(){
//   $('#modalPic').modal({
//     show : 'true',
//     backdrop :"false"
//   });
//   $('#modalPic').on('shown.bs.modal',function(e){
//     $('.modal-backdrop').remove();
//   })
// })
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