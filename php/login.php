<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Responsive Login-Register Page</title>


<?php
	include '/template/header.php';
?>
<!------ Include the above in your HEAD tag ---------->

 <style>
 html,body{
	background-image: url('http://c1.peakpx.com/wallpaper/97/360/24/light-lights-abstract-colors-color-wallpaper.jpg');
 }
#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}


.main{
 	margin:50px 15px;
 
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
	font-size:24px;
}

input,
input::-webkit-input-placeholder {
    font-size: 16px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
    padding: 20px;
    border:2px solid #3ea2ff;
	background:transparent;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #3A81FF;
    font-size: 17px;
}

.register-sec-bg{
	margin-top:0px;
 	background-size: cover;
 	background-attachment: fixed;
 	background-repeat: no-repeat;
	min-height:700px;
}
.btn-reg{
	border:1px solid #fff;
	background-color:transparent;
	color:#fff;
	width:100%;
	font-size:24px;
	font-weight:normal;
	text-align:center;
	padding:15px;
	margin-top:3%;
			transition:all 0.5s ease;
	-webkit-transition:all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
}
.btn-reg:hover{
	color:#fff;
	background-color:#3ea2ff;
	border-color:#3EA2FF;
	text-emphasis:none;
}
.btn-block-login{
	margin-top:20px;
	display:flex;
}
.btn-login{
	color:#fff;
	background-color:#3EA2FF;
	border-color:#a2ab58;
	width:100%;
	font-size:24px;
	font-weight:normal;
	text-align:center;
	padding:15px;
	margin-top:3%;
	text-emphasis:none;
				transition:all 0.5s ease;
	-webkit-transition:all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
}
.btn-login:hover{
	border:1px solid #fff;
	background-color:transparent;
	color:#fff;
	
}

.login-box{
	border:2px solid #3EA2FF;
	padding:20px;
	color:#fff;
}
.login-box-heading{
	padding:0px;
	font-size:30px;
	font-weight:normal;
	color:#fff;
}
/* Bounce To Bottom */
.hvr-bounce-to-bottom {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}
.hvr-bounce-to-bottom:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background:#e81e1e;
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transform-origin: 80% 0;
  transform-origin: 80% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-bounce-to-bottom:hover, .hvr-bounce-to-bottom:focus, .hvr-bounce-to-bottom:active {
  color: white;
}
.hvr-bounce-to-bottom:hover:before, .hvr-bounce-to-bottom:focus:before, .hvr-bounce-to-bottom:active:before {
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}
/* Bounce To Top */
.hvr-bounce-to-top {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}
.hvr-bounce-to-top:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #3ea2ff;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-bounce-to-top:hover, .hvr-bounce-to-top:focus, .hvr-bounce-to-top:active {
  color: white;
}
.hvr-bounce-to-top:hover:before, .hvr-bounce-to-top:focus:before, .hvr-bounce-to-top:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}
 </style>

</head>

<body>
	<section class="register-sec-bg">
		<div class="container ">
			<div class="row main">
            <div class="col-md-5 col-sm-5 col-xs-12">
				<div class="main-login main-center hvr-bounce-to-bottom">
				<h2>Sign up</h2>
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
						<br>
						<div class="btn-block-login">
							<a href="#" target="_blank"  class=" btn-reg">Register</a>
						</div>
					</form>
				</div>
			</div>
            
            <div class="col-md-2 col-sm-2 col-xs-12">
            </div>
            
            <div class="col-md-5 col-sm-5 col-xs-12">
				<div class="login-box hvr-bounce-to-top">
                	<div class="login-box-heading">
                    	<p>Login</p>
                    </div>
                    <div class="login-box-body">
                    		<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="name" placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

							<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="email" id="email1"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>
                        <a style="color:#fff; float:right;" href="#">Forgot Your Password?</a><br>
						<div class="btn-block-login">
                        	<a href="#" class="btn-login">Login</a>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
</section>
</body>
</html>
