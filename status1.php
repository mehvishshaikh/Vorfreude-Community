<?php
session_start();
if(isset($_SESSION['user'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/status.png"/>
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
  <link rel="stylesheet" href="style3.css">
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
<script type="text/javascript">
function validateForm() {
  var name = document.forms["myForm"]["name"];
  var des = document.forms["myForm"]["idea"];
  var mininvestment = document.forms["myForm"]["number"];
  var maxinvestment = document.forms["myForm"]["number1"];
  var email = document.forms["myForm"]["email"]; 
  if (name.value== "") {
    window.alert("Title must be filled out");
    name.focus();
    return false;
  }
  if (des.value== "") {
    window.alert("Description must be filled out");
    des.focus();
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
</script>
<style>
        tr{
            color: #000;
        }
        table{
            text-align: center;
        }

        th{
            color: #fff;
            font-size: 25px;
            text-align: center;
        }
        td{
            font-size: 20px;
            width: 300px;
            color:white;
        }
        th{
          font-size: 20px;
            width: 300px;
            background: black;
            color: white;
        }
    </style>
    
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
              <a class="nav-link" href="upload1.php"><b>Upload a research</b></a>
            </li>
            
</ul>

<a href="./home/startup/index.php" style="margin-right:0%;"><b>Logout</b></a>
            
           
        </div>
      </nav>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!--==============================================================================================================================-->
	<div class="limiter"><br>
  <!--<center><form  action="relatedsearch.php" name="myForm" method="POST">
    Search for related ideas:
<input style="border:2px solid black;" type="text" autocomplete="off" placeholder="Check pitch for your idea .." name="search">
<button type="submit"><i class="fa fa-search"></i></button></h2>
    </form></center>-->
		<div class="container-login100" style="background-image: url('images/bg-05.jpg');">
			<div class="wrap-login100">
      <?php
include 'connection.php';
$user = $_SESSION['user'];
$query1 = "select * from register where email='$user'";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);
$id = $row1["user_id"];
$query = "select id, title, date from research where user_id=$id";
$result = mysqli_query($conn,$query);
$rowcount = mysqli_num_rows($result);
?>
<center><h1 style="color:white;">Ideas uploaded</h1></center>
<center>
       <h2></h2>
        <!--<form action="pitchsearch.php" name="myForm" method="POST">
<input type="text" autocomplete="off" placeholder="Check pitch for your idea .." name="search">
<button type="submit"><i class="fa fa-search"></i></button></h2>
              <br>
    </form>-->
              </center><br>
<center><table border="1">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Date of Upload</th>
    </tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
    $row = mysqli_fetch_array($result);
?>
<tr>
    <td><?php echo $row["id"] ?></td>
    <td><?php echo $row["title"] ?></td>
    <td><?php echo $row["date"] ?></td>
</tr>
<?php
}
?>
</table>
</center>
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