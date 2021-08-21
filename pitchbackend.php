<?php
session_start();
include 'connection.php';
$name = $_POST['name'];
$investment = $_POST['number'];
$email = $_POST['email'];
$user = $_SESSION['user'];
$query = "select * from image where name='$user'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$id = $row["ID"];
$sql="INSERT INTO pitch (name,amount,email,investor_id) VALUES ('$name','$investment','$email','$id')";
if(!mysqli_query($conn,$sql))
{
    echo'<script type="text/javascript">alert("Failed to add pitch!!");</script>'; 
    header("refresh:2; url=pitch.php"); 
}
else{
    echo'<script type="text/javascript">alert("Pitch addedSuccessfully!!");</script>';
    header("refresh:2; url=ideafetch.php");
}

?>