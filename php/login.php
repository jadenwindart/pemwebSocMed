<!doctype html>
<html>
<head>
<!--CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<link rel="icon" href="image/favicon.png" sizes="16x16" type="image/png">

<!-- JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="//code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


</head>
<meta charset="utf-8">
<title>Your Social Media</title>

<?php
	include './php/template/header.php';
?>
<!------ Include the above in your HEAD tag ---------->

 <style>
 html,body{
	background-image: url('https://blog.hdwallsource.com/wp-content/uploads/2014/11/gradients-26042-26727-hd-wallpapers.jpg');

	background-size: auto auto
	background-repeat: repeat

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
.date {
background-color: #fff ;
color: #333 ;
}
 </style>

</head>

<body>

	<img src="image/logo.png" height="125" width="100" class="col-md-1 col-sm-1 col-xs-5">

	<section class="register-sec-bg">
		<div class="container ">
			<div class="row main">
            <div class="col-md-5 col-sm-5 col-xs-12">
				<div class="main-login main-center hvr-bounce-to-top">
				<h2>Sign up</h2>
					<form class="" method="post" action="#" id="register">
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your password"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="cpassword" class="cols-sm-2 control-label">Confirm Your Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" id="cpassword"  placeholder="Confirm Your Password"/>
								</div>
								<label id="alert" class="cols-sm-2 control-label"></label>
							</div>
						</div>
						<div class="form-group">
								<label for="firstName" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="firstName" id="firstName"  placeholder="Enter your First Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
								<label for="lastName" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lastName" id="lastName"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
						<label for="datePicker" class="cols-sm-2 control-label">Birth Date</label>
							<div class='input-group date' id='datetimepicker1'>
							<input type='text' class="form-control" id="datePicker" name="birthDate" class="form-control" style="color:black;" data-date-end-date="0d"/>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							</span>
							</div>
						</div>
						<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="gender" id="inlineCheckbox1" value="male"/>Male
								</label>
								<label class="radio-inline">
									<input type="radio" name="gender" id="inlineCheckbox2" value="female" />Female
								</label>
							</div>
						<br>
						<div class="btn-block-login">
							<input type="submit" value="Register" class="btn-reg">
						</div>
					</form>
				</div>
			</div>
            
            <div class="col-md-2 col-sm-2 col-xs-12">
            </div>
            
            <div class="col-md-5 col-sm-5 col-xs-12">
				<div class="login-box hvr-bounce-to-top">
                	<div class="login-box-heading">
                    	<h2>Login</h2>
					</div>
					<form action="" method="post" id="login">
                    <div class="login-box-body">
                    		<div class="form-group">
							<label for="usernameLogin" class="cols-sm-2 control-label">Your Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="usernameLogin" name="usernameLogin" placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Your Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="passwordLogin" id="passwordLogin"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>
						<div class="btn-block-login">
                        	<input type="submit" value="Login" class="btn-login">
                        </div>
					</div>
					</form>
                </div>
			</div>
        </div>
    </div>
</section>
</body>
<script src="js/login.js"></script>
<script>
	$(function () {
   var bindDatePicker = function() {
		$(".date").datetimepicker({
        format:'YYYY-MM-DD',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('#datePicker').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('YYYY-MM-DD');
			}

			$(this).val(date);
		});
	}
   
   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }
   
   bindDatePicker();
 });
</script>
</html>

