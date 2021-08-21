<?php
session_start();
include 'connection.php';
    $name = $_FILES['fileupload']['name'];
    $extension = strtolower(substr($name, strpos($name, '.')+1));
    $type = $_FILES['fileupload']['type'];
    $size = $_FILES['fileupload']['size'];
    //echo "size of file: $size";
    $max_size = 2000000;
    $doc_name = $_POST['name'];
    $company = $_POST['company'];
    $description = $_POST['idea'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $tmp_name = $_FILES['fileupload']['tmp_name'];
    if(isset($name)){
        if(!empty($name)){
            if(($extension=='jpg'||$extension=='jpeg'||$extension=='png') && $size<=$max_size){
                $Location = "./images/$name";
                $retrival_path = "http://localhost/hackathon/images/$name";
                if(move_uploaded_file($tmp_name,$Location)){
                    $sql = "INSERT INTO image (name,company,description,email,Password,path) VALUES ('$doc_name','$company','$description','$email','$password','$retrival_path')";
     if(!mysqli_query($conn,$sql))
     {
         echo'<script type="text/javascript">alert("File upload failed");</script>';  
         header("refresh:2; url= investorregistration.php");
     }
     else{
         echo'<script type="text/javascript">alert("File uploaded successfully");</script>';
        header("refresh:2; url=investorlogin.php");
     }
                }
                else{
                    echo'<script type="text/javascript">alert("There was an error");</script>';
                }
            }else{
                echo'<script type="text/javascript">alert("The file must be in .doc/.docx format and the size should be less than or equal to 1MB");</script>';
                header("refresh:2; url=investorregistration.php");
            }
        }
    }
     
    
?>