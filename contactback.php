<?php
include 'connection.php';
$Username = $_POST['name'];
$Email = $_POST['email'];
$message = $_POST['message'];
$sql="INSERT INTO contact (name,email,message) VALUES ('$Username','$Email','$message')";
if(!mysqli_query($conn,$sql))
{
    echo'<script type="text/javascript">alert("Message sending failed!!");</script>'; 
    header("refresh:2; url=contact.php"); 
}
else{
    echo'<script type="text/javascript">alert("Message sent!!");</script>';
    header("refresh:2; url=contact.php");
}

?>