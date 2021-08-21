<?php
session_start();
include 'connection.php';
    $doc_name = $_POST['name'];
    $description = $_POST['idea'];
    $creator = $_POST['creator'];
    $category = $_POST['category'];
    $other_category= $_POST['other_category'];
    $min_investment = $_POST['number'];
    $max_investment = $_POST['number1'];
    $name1 = $_FILES['fileupload1']['name'];
    $name = $_FILES['fileupload']['name'];
    //$type = $_FILES['fileupload']['type'];
    $size = $_FILES['fileupload']['size'];
    //echo "size of file: $size";
    $max_size = 5000000;
    $tmp_name1 = $_FILES['fileupload1']['tmp_name'];
    $tmp_name = $_FILES['fileupload']['tmp_name'];
    $link = $_POST['link'];
    $email=$_POST['email'];
    $user = $_SESSION['user'];
    $query = "select * from register where email='$user'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $id = $row["user_id"];
    if(isset($name)){
        if(!empty($name)){
            if(($size<=$max_size)){
                $Location1 = "./images/$name1";
                $Location = "./documents/$name";
                $retrieval_path1 = "http://localhost/Login/images/$name1";
                $retrival_path = "http://localhost/Login/documents/$name";
                if(move_uploaded_file($tmp_name,$Location) && move_uploaded_file($tmp_name1,$Location1)){ 
                    $sql = "INSERT INTO research (title,description,creator,category,other_category,mininvestment,maxinvestment,img_path,path,link,email,user_id) VALUES ('$doc_name','$description','$creator','$category','$other_category','$min_investment','$max_investment','$retrieval_path1','$retrival_path','$link','$email','$id')";
     if(!mysqli_query($conn,$sql))
     {
         echo'<script type="text/javascript">alert("File upload failed");</script>';  
         header("refresh:2; url= Upload1.php");
     }
     else{
         echo'<script type="text/javascript">alert("File uploaded successfully");</script>';
        header("refresh:2; url= Upload1.php");
     }
                }
                else{
                    echo'<script type="text/javascript">alert("There was an error");</script>';
                }
            }else{
                echo'<script type="text/javascript">alert("The file must be in .pdf format and the size should be less than or equal to 5MB");</script>';
                header("refresh:2; url= Upload1.php");
            }
        }
    }
     
    
?>