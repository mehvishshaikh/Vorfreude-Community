<?php
session_start();
include 'connection.php';
    $pname=$_POST['uname'];
    $email=$_POST['email'];
    $pnumber=$_POST['contact'];
    $dob=$_POST['dob'];
    $profession=$_POST['profession'];
    $password=$_POST['pass'];
    $name = $_FILES['fileupload']['name'];
    $extension = strtolower(substr($name, strpos($name, '.')+1));
    $type = $_FILES['fileupload']['type'];
    $size = $_FILES['fileupload']['size'];
    //echo "size of file: $size";
    $max_size = 2000000;
    $tmp_name = $_FILES['fileupload']['tmp_name'];
    $query1="SELECT * FROM register WHERE email='$email'";
    $result=mysqli_query($conn,$query1);
    if(mysqli_num_rows($result)>0){
        echo'<script type="text/javascript">alert("Email id already exists");</script>';
        header("refresh:2; url=professional.html");
    }
    else{
    if(isset($name)){
        if(!empty($name)){
            if(($extension=='png' || $extension=='jpeg' || $extension=='jpg') && ($size<=$max_size)){
                $Location = "./documents/$name";
                $retrival_path = "http://localhost/Login/documents/$name";
                if(move_uploaded_file($tmp_name,$Location)){
         $query = mysqli_query($conn,"INSERT INTO register (name,email,contact,dob,profession,password,path) VALUES ('$pname','$email','$pnumber','$dob','$profession','$password','$retrival_path')");
         if($query){
         echo'<script type="text/javascript">alert("Register Successfully");</script>';
         header("refresh:2; url=login1.php");
     }
     else{
        echo'<script type="text/javascript">alert("Failed to register");</script>';
        header("refresh:2; url=professional.html");
    }
     }
                
                else{
                    echo'<script type="text/javascript">alert("There was an error");</script>';
                }
            }else{
                echo'<script type="text/javascript">alert("The file must be in .pdf format and the size should be less than or equal to 2MB");</script>';
                header("refresh:2; url= professional.html");
            }
        } 
    }
}   
?>