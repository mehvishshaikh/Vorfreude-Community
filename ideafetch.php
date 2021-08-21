<?php
session_start();
if(isset($_SESSION['user'])){

?>

<html>
<head>
<title>Ideas</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <!--<link rel="stylesheet" href="style.css">-->
    <style>
      button{
        width:15%;
        height: 8%;
        background: green;
      }
      </style>
</head>
<body style="background-image: url('images/purple.png');  background-size: cover; background-position: center;">
<!--=====================================================================-->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
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
      <a href="index.php" style="margin-right:3% ;text-decoration:none; color:black;">Logout</a> 
		</div>
	  </nav>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	
	<!--=========================================================================-->

              <br><br>
              <center>
       <h2></h2>
        <form action="ideasearch.php" name="myForm" method="POST">
<input style="width:30%; border-radius:5px;" type="text" placeholder="Search .." name="search">
<button style="width: 5%; height: 5%; border-radius: 5px;" type="submit"><i class="fa fa-search"></i></button></h2>
              <br>
    </form>
              </center>
<?php

include 'connection.php';
$sql = "select description,docname,mininvestment,maxinvestment,email,path from ideas";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    echo "<div id='img_div'>";
    echo"<center>";
        echo "<h3>Name: ".$row['docname']."</h3>";
        echo "<h2><p>Idea Description: ".$row['description']."</p></h2>";
        echo "<h3>Investment Required: ".$row['mininvestment']."-".$row['maxinvestment']."</h2>";
        echo "<h2>Email of the contact person: ".$row['email']."</h2>";
        echo "<center><h3>Download Abstract</h3><a href=".$row['path']."><button>Download</button></a></center>";
    echo "</center>";
   
?>
<!--<script src="jquery.min.js"></script>
<script src="jquery.collapser.min.js"></script>
<script>
$('.lgtext').collapser();
</script>-->
<?php
    echo"</div>";
}
?><br>
<center><a href="pitch.php"><button>Add pitch</button></a>
<?php
}else{
    header("location:index.php");
}?>
</body>
</html>