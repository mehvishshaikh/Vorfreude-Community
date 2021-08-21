<?php
session_start();
include 'connection.php';
    $sname = $_POST['uname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $institute=$_POST['institutename'];
    $pass=$_POST['pass'];
    $name = $_FILES['fileupload']['name'];
    $extension = strtolower(substr($name, strpos($name, '.')+1));
    $type = $_FILES['fileupload']['type'];
    $size = $_FILES['fileupload']['size'];
    //echo "size of file: $size";
    $max_size = 2000000;
    $tmp_name = $_FILES['fileupload']['tmp_name'];
   

    if(isset($name)){
        if(!empty($name)){
            echo"arish";
            if(($extension=='jpg' || $extension=='jpeg' || $extension=='png') && ($size<=$max_size)){
                $Location = "./documents/$name";
                $retrival_path = "http://localhost/Login/documents/$name";
                if(move_uploaded_file($tmp_name,$Location)){
                    $sql = "INSERT INTO student (name,email,contact,dob,institute,password,path) VALUES ('$sname','$email','$contact','$dob','$institute','$pass','$retrival_path')";
     if(!mysqli_query($conn,$sql))
     {
         echo'<script type="text/javascript">alert("File upload failed");</script>';  
         //header("refresh:2; url= Upload1.php");
     }
     else{
         echo'<script type="text/javascript">alert("File uploaded successfully");</script>';
         //header("refresh:2; url=Upload1.php");
     }
                }
                else{
                    echo'<script type="text/javascript">alert("There was an error");</script>';
                }
            }else{
                echo'<script type="text/javascript">alert("The file must be in .pdf format and the size should be less than or equal to 2MB");</script>';
                //header("refresh:2; url= Upload1.php");
            }
        }
    }
     
    
?>