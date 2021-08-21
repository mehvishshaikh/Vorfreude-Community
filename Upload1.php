<?php
session_start();
if(isset($_SESSION['user'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>post-login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/research.png"/>
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
<script>n =  new Date();
	y = n.getFullYear();
	m = n.getMonth() + 1;
	d = n.getDate();
    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;</script>
     <link rel="stylesheet" href="style3.css">
<script type="text/javascript">
function validateForm() {
  var name = document.forms["myForm"]["name"];
  var idea = document.forms["myForm"]["idea"];
  var creator = document.forms["myForm"]["creator"];
  var mininvestment = document.forms["myForm"]["number"];
  var maxinvestment = document.forms["myForm"]["number1"];
  var link = document.forms["myForm"]["link"];
  var email = document.forms["myForm"]["email"];
  var consent = document.forms["myForm"]["consent"]; 
  if (name.value== "") {
    window.alert("Title must be filled out");
    name.focus();
    return false;
  }
  if (idea.value== "") {
    window.alert("Description must be filled out");
    idea.focus();
    return false;
  }
  if (creator.value== "") {
    window.alert("creator must be filled out");
    creator.focus();
    return false;
  }
  if (mininvestment.value== "") {
    window.alert("Fill the investment range");
    mininvestment.focus();
    return false;
  }
  if (maxinvestment.value== "") {
    window.alert("Fill the investment range");
    mininvestment.focus();
    return false;
  }
  if(mininvestment.value > maxinvestment.value){
    window.alert("error");
    mininvestment.focus();
    return false;
  }
  if (link.value== "") {
    window.alert("Fill the link");
    link.focus();
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
}
function CheckColors(val){
       var element=document.getElementById('color');
       if(val=='pick a color'||val=='others')
         element.style.display='block';
       else  
         element.style.display='none';
      }
</script>
</head>
<body>

<!-- !? LOADER -->
<div class="loader">
	<div class="inner"></div>
</div>


<!--==============================================================================================================================-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="status1.php" style="margin-left:10%"><b>Status</b></a>
            </li>
            
</ul>
<a href="./home/startup/index.php" style="margin-right:0%"><b>Logout</b></a>
            
           
        </div>
      </nav>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!--==============================================================================================================================-->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-05.jpg');">
			<div class="wrap-login100">
				<form action="addresearch.php" class="login100-form validate-form" name="myForm" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
            Add a Research<br>
                    </span><br>
                    
                    <div class="wrap-input100">
						<input class="input100" type="text" autocomplete="off" name="name" placeholder="Title of the Research">
						<span class="focus-input100" data-placeholder="&#xf150;"></span>
                    </div>
                    	
                    
					<div class="wrap-input100">
						<input class="input100" type="text" autocomplete="off" name="idea" placeholder="Research Summary">
						<span class="focus-input100" data-placeholder="&#xf158;"></span>
					</div>
          <div class="wrap-input100">
						<input class="input100" type="text" autocomplete="off" name="creator" placeholder="Creator of the Research">
						<span class="focus-input100" data-placeholder="&#xf205;"></span>
          </div>

          <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
          <div class="wrap-input100">
          <span class="focus-input100" data-placeholder="&#xf179;"></span>
            <select name="category" onchange='CheckColors(this.value);'> 
              <option>Select Research Category:</option>
              <option value="scientific research">scientific research</option>
              <option value="Anthropology">Anthropology</option>
              <option value="Archaeology">Archaeology</option>
              <option value="Biology">Biology</option>
              <option value="Earth and atmospheric sciences">Earth and atmospheric sciences</option>
              <option value="Economics">Economics</option>
              <option value="Public health">Public health</option>
              <option value="Management">Management</option>
              <option value="Sociology">Sociology</option>
              <option value="Music">Music</option>
              <option value="History">History</option>
              <option value="Outer Space">Outer Space</option>
              <option value="others">Others</option>
            </select>
            <input class="input100" type="text" name="other_category" autocomplete="off" id="color" style='display:none;' placeholder="Please specify the category here"/>
</div>
					
					<div class="wrap-input100">
						<input class="input100" type="number" autocomplete="off" name="number" placeholder="Minimum investment required">
						<span class="focus-input100" data-placeholder="&#xf198;"></span>
                    </div>
                    <div class="wrap-input100">
						<input class="input100" type="number" autocomplete="off" name="number1" placeholder="Maximum investment required">
						<span class="focus-input100" data-placeholder="&#xf198;"></span>
					</div>

					
                    <div class="wrap-input100">
						<input class="input100" type="file" name="fileupload1" accept=".jpeg, .jpg, .png" required>
						<span class="focus-input100"data-placeholder="&#xf180;"></span><p style="color:white; margin-left:10%;">(Upload any cover image for your research)</p>
          </div>
					<div class="wrap-input100">
						<input class="input100" type="file" name="fileupload" required>
						<span class="focus-input100"data-placeholder="&#xf180;"></span><p style="color:white; margin-left:10%;">(Upload research in any format)</p>
          </div>
                    <div class="wrap-input100">
  <input class="input100" type="url" name="link" id="url"  autocomplete="off" placeholder="Google drive link of your previous project" pattern="https://.*" size="30">
  <span class="focus-input100" data-placeholder="&#xf173;"></span>
</div>
                    <div class="wrap-input100">
						<input class="input100" type="email" autocomplete="off" name="email" placeholder="Email of the contact person">
						<span class="focus-input100"  data-placeholder="&#xf159;"></span>
					</div>
          <input type="checkbox" name="consent" value="consent" required>
I / We have read the information above mentioned and by Clicking "Submit", I / We Declare that I / We have Read and Agree to Terms and Conditions.<br><br>         

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
					
					

					

				</form>
			</div>
		</div>
	</div>
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

    <?php
}else{
    header("location:login1.php");
}?>
	
</body>
</html>