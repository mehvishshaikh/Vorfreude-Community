<?php
session_start();
include 'connection.php';
$Username = $_POST['uname'];
$Email = $_POST['email'];
$cnum = $_POST['contact'];
$dob = $_POST['dob'];
$Password = $_POST['pass'];
$sql="INSERT INTO register (Username,Email,contact_no,dob,Password) VALUES ('$Username','$Email','$cnum','$dob','$Password')";
if(!mysqli_query($conn,$sql))
{
    echo'<script type="text/javascript">alert("Failed to Register!!");</script>'; 
    header("refresh:2; url=newentrepreneur.html"); 
}
else{
    echo'<script type="text/javascript">alert("Registered Successfully!!");</script>';
    header("refresh:2; url=index.php");
}

?>