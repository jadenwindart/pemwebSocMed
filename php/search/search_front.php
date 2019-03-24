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
    <div class="w3-col m2">&nbsp
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m8">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h3 class="w3-opacity">Search Result</h3>
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
              <!-- <article class="row">
                <div class="col-md-2 col-sm-2 hidden-xs">
                  <figure class="thumbnail">
                    <img class="img-responsive" src="https://www.themebeta.com/files/picture/201601/18/78ae73519371a3c6ccffd86d5f33e60f.jpeg"/>
                    <figcaption class="text-center">Hohochin</figcaption>
                  </figure>
                </div>
                <div class="col-md-10 col-sm-10">
                  <div class="panel panel-default arrow left">
                    <div class="panel-body">
                      <header class="text-left">
                        <div class="comment-user"><h4>Hohochin</h4></div>
                      </header>
                    </div>
                  </div>
                </div>
              </article>
              <article class="row">
                  <div class="col-md-2 col-sm-2 hidden-xs">
                    <figure class="thumbnail">
                      <img class="img-responsive" src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png" />
                      <figcaption class="text-center">username</figcaption>
                    </figure>
                  </div>
                  <div class="col-md-10 col-sm-10">
                    <div class="panel panel-default arrow left">
                      <div class="panel-body">
                        <header class="text-left">
                          <div class="comment-user"><h4>That Guy</h4></div>
                        </header>
                      </div>
                    </div>
                  </div>
              </article> -->

              <?php
                if(!empty($user)) {
                  for($i = 0; $i < sizeof($user); $i++) {
                    echo "<article class='row'>";
                      echo "<div class='col-md-2 col-sm-2 hidden-xs'>";
                        echo "<figure class='thumbnail'>";
                          echo "<img class='img-responsive' src='".getProfPic($user[$i]->getProfilePicture())."'/>";
                          echo "<figcaption class='text-center'>".$user[$i]->getName()."</figcaption>";
                        echo "</figure>";
                      echo "</div>";
                      echo "<div class='col-md-10 col-sm-10'>";
                        echo "<div class='panel panel-default arrow left'>";
                          echo "<div class='panel-body'>";
                            echo "<header class='text-left'>";
                              echo "<div class='comment-user'>";
                                echo "<a href='search_back.php?id=".$user[$i]->getUsername()."'><h4>".$user[$i]->getName()."</h4></a>";
                              echo "</div>";
                            echo "</header>";
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
    <!-- <p>Footer Text</p> -->
</footer>
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
</script>

<?php
  function getProfPic($path) {
    if($path == NULL){
      return "../../image/no_image.png";
    }
    else{
      return "../../".$path;
    }
  }
?>

</body>
</html> 
