<?php
if(isset($_GET['ID'])){
    require_once'connection.php';
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM research WHERE id='$ID' ";
    $result = mysqli_query($conn,$sql) or die("Bad query: $sql");
    $row = mysqli_fetch_array($result);
}
else{
    header('Location: index1.php');
}
?>
<html>
<head>
<title>details</title>
</head>
<body>
<h3><?php echo $row['description'] ?></h3>
<h1><?php echo $row['title'] ?></h1>
<img src = <?php echo $row['img_path']?>>
</body>
</html>