<?php
session_start();
include 'connection.php';
$email = $_POST['email'];
$Password = $_POST['pass'];
$_SESSION['user_id'] = $row['user_id'];
$sql = "select * from register where email = '$email' and password = '$Password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($row['email'] == $email && $row['password'] == $Password)
{
    echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
    header("refresh:2; url=index.php");
}
else{
    echo'<script type="text/javascript">alert("check your login credentials");</script>';
    header("refresh:2; url=login4.php");
}

?>