<?php

session_start();

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Research-Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/login.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<!-- Font awesome link -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<!-- JQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style3.css">
  <script type="text/javascript">
function validateForm() {
  var email = document.forms["myForm"]["email"];
  var pass = document.forms["myForm"]["pass"]; 
  if(email.value=="")
			{
			window.alert("Email-Id must be filled out");
			email.focus();
			return false;    
			}

        if(email.value.indexOf("@",0)<0)
        {
        window.alert("Check your Email id");
        email.focus();
        return false;    
        }

        if(email.value.indexOf(".",0)<0)
        {
        window.alert("Check your Email id");
        email.focus();
        return false;    
        }
  if (pass.value== "") {
    window.alert("Password must be filled out");
    pass.focus();
    return false;
  }
}
</script>
</head>
<body>
	
	<!-- !? LOADER -->
    <div class="loader">
        <div class="inner"></div>
	</div>
	<!--=====================================================================-->
 <!--===================Navbar========================-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="./home/startup/index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
	</button>
	

        <li class="nav-item1 active">
            <a class="nav-link" href="contact.php"><b>Contact Us</b></a>
		  </li>
		  
</ul>
<!--
<a class="navbar-brand" href="index.html" style="margin-left:70%" >Logout</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>-->

<!--
<a href="index.html" style="margin-left:70%">Logout</a>-->
        
       
    </div>
  </nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <!--==================================================-->

<!--=========================================================================-->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-05.jpg');">
			<div class="wrap-login100">
            <form action="login.php" class="login100-form" name="myForm" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sign in
					</span>

					<div class="wrap-input100" data-validate = "Enter username">
						<input class="input100" type="email" name="email" autocomplete="off" placeholder="Enter your email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					
					<!--<div class="text-center p-t-5">
						<a style="float:left;color:white;" class="txt1" href="#">
							Forgot Password?
						</a>
					</div>-->

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<br>


					<br>


					<div class="text-center p-t-5">
						<a style="color:white;" class="txt1" href="./testing.html">
							New to the platform?
						</a>
					</div>
					<br>



				</form>
			</div>
		</div>
	</div>
	<!--<section id="section-about">
		<center><h1 style="font-size:50px;">About Us</h1></center>
		<div class="row">
			<div class="col-sm-6">
		<br><br>
			<img src="business2.jpg" style="margin-left:10%;">	
	</div>
	<div class="col-sm-6"><br><br>
		<p style="margin-right:10%;">
			Most of the users are confused while selecting their streams according to their capability. User can select career choice based on their IQ. The main aim of the project is to help user for choosing their career option. System helps the user to select
			their career choice according to their interest in particular field. The IQ test brings an easy interesting working environment, more clarity in presenting appropriate information to the user and also it gives faster access and retrieval of
			information from the database. Under this system, questions can be stored and retrieved easily. The system checks the answer by matching the pre-defined answers in database and users answer. The marking criteria is decided by the admin and
			stored in the system for reference. Admin can add question based on the stream. Question can be of level 1 and level 2. If the candidate scores good marks at particular stream, system will suggest the user in which stream their good at. Admin
			can add or delete questions from the system. The results of each user are stored in the database and can view the result accordingly.<br><br> This website is built purely for educational purpose. Through it, we aim to serve the
			students and guide them with a proper perspective. Career planning plays a vital role in one's life, so choosing the right path is essential. As for now a days, one can even pursue their hobbies as a career option. Our website, thus, aims
			to bring clarity to the students on which path they should opt, for a better future purely on the basis of their knowledge and talents.<br><br>
</p><br><br>
	</div>
	</div>
	</section>-->
	<div class="footer">
		<h4>&copy;COPYRIGHT <br> All Rights Reserved</h4>
		</div>

	<div id="dropDownSelect1"></div>
	<script>
		$(window).on("load", function() {
			$(".loader .inner").fadeOut(500, function() {
				$(".loader").fadeOut(750)
			});
		});
	</script>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>