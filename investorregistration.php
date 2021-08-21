<!DOCTYPE html>
<html lang="en">
<head>
	<title>Investor-Signup</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/reg.png"/>
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
<script type="text/javascript">
function validateForm() {
  var name = document.forms["myForm"]["name"];
  var company = document.forms["myForm"]["company"];
  var des = document.forms["myForm"]["idea"];
  var email = document.forms["myForm"]["email"];
  var pass = document.forms["myForm"]["pass"];
  var pass2 = document.forms["myForm"]["pass2"];  
  
  if (name.value== "") {
    window.alert("Name must be filled out");
    name.focus();
    return false;
  }
  if (des.value== "") {
    window.alert("Description must be filled out");
    des.focus();
    return false;
  }
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
  if (pass2.value== "") {
    window.alert("Password must be filled out");
    return false;
  }
   if (pass.value != pass2.value) {
    window.alert("Password not match");
	pass2.focus();
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php">EIconnect</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
  
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <ul class="navbar-nav mr-auto">
		<li class="nav-item1 active">
			<a class="nav-link" href="contact.php">Contact Us</a>
		  </li>
	  </ul>
	 
	</div>
  </nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!--=========================================================================-->


	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100">
				<form action="img.php" name="myForm" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Investor Sign Up
                    </span>
                    
                    <div class="wrap-input100">
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" autocomplete="off" name="name" placeholder="Enter your name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" autocomplete="off" name="company" placeholder="Enter your company name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    
                    <div class="wrap-input100">
                        <input class="input100" type="text" autocomplete="off" name="idea" placeholder="Your Description">
                        <span class="focus-input100" data-placeholder="&#xf27b;"></span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" autocomplete="off" name="email" placeholder="johnsmith@gmail.com">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>                    

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Create a Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass2" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    
                    
					<div class="wrap-input100">
						<input class="input100" type="file" name="fileupload" accept=".jpg,.jpeg,.png" placeholder="Upload Info">
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
					
					<div class="text-center p-t-15" style="color:white;">
						
							By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.
					</div>



					

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<a href="./index.html">Sign In Instead</a>
						</button>
					</div>
					

				</form>
			</div>
		</div>
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