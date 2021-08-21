<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user']))
{
 header('location:index.php');
}

if(isset($_POST["email"]))
{
 $query = "
   SELECT * FROM login 
    WHERE email = :email
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':email' => $_POST["email"]
     )
  );
  $count = $statement->rowCount();
  //if($count > 0)
 //{
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["password"]))
      {
        $_SESSION['ID'] = $row['user_id'];
        $_SESSION['email'] = $row['email'];
        $sub_query = "
        INSERT INTO login_details 
        (user_id) 
        VALUES ('".$row['ID']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header("location:index.php");
      }
     else
    {
       $message = "<label>Wrong Password</label>";
    }
    }
 }
 else
 {
  $message = "<label>Wrong Username</labe>";
 }


?>

<html>  
    <head>  
        <title>EIconnect-Home</title>  
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
  var uname = document.forms["myForm"]["name"];
  var passd = document.forms["myForm"]["pass"];
  if (uname.value== "") {
    window.alert("Name must be filled out");
    name.focus();
    return false;
  }
  if (passd.value== "") {
    window.alert("Password must be filled out");
    passd.focus();
    return false;
  }
  
}
</script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
  

<body>
	
	<!-- !? LOADER -->
    <div class="loader">
        <div class="inner"></div>
	</div>
	<!--=====================================================================-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<a class="navbar-brand" href="#">EIconnect</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			  <a class="nav-link" href="#section-about">About Us <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item1 active">
				<a class="nav-link" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
			  </li>
		  </ul>
		  
		</div>
	  </nav>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	
	<!--=========================================================================-->

<!--=========================================================================-->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" name="chat" onsubmit="return validateForm()">
				<?php echo $message; ?></p>
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sign in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" autocomplete="off" name="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					
					<div class="text-center p-t-5">
						<a style="float:left;color:white;" class="txt1" href="#">
							Forgot Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="login" class="login100-form-btn" value="Login" />
					</div>



					<br>


					<div class="text-center p-t-5">
						<a style="color:white;" class="txt1" href="testing.html">
							New Researcher?
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
			<img src="business2.jpg" style="margin-left:5%;">	
	</div>
	<div class="col-sm-6"><br><br>
		<p style="margin-left:2%; font-size: 18px;">
		<b>EI-Connect</b> is an online platform that connects entrepreneurs seeking to raise investments with the investors that have been vetted.
We help you explore an wide range of scholarly content through a powerful ONLINE platform.
 EI-Connect is an technology platform where communication between investors and entrepreneurs . We're working hard to make sure that you have the freedom and flexibility to create meaningful experiences without borders or limitations.
Finding the  right investors for your buisness will not only provide you with the funding you require but also with the experience and mentorship that can really take your buisness to the next level.
<b>"From fraud preventation to payout scheduling . we've got your back."</b>
<b style="font-size:20px">Submit your Propsal to us & let E-Connect find you the Right investor for your Buisness.</b>
<br><br>
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