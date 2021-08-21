<?php
$conn = mysqli_connect('localhost','root','');
if(!$conn)
{
    echo'not connected to server';
}
if(!mysqli_select_db($conn,'vc'))
{
    echo'database not selected';
}
?>