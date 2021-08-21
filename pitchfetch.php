<html>
<head>
<!--<title>Status</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="style.css">
    <style>
        tr{
            color: #000;
        }
        table{
            text-align: center;
        }

        th{
            color: #fff;
        }
        td{
            font-size: 14px;
            width: 300px;
        }
        th{
            font-size: 14px;
            width: 300px;
            background: black;
            color: white;
        }
    </style>-->
</head>

<body>
<!--<div class="topnav" id="myTopnav">
                <a href="Upload1.php">upload</a>
                <a href="index.php" style="float:right;margin-right:40px;">Logout</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                </a>
              </div>
              <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>
              <br><br><br>-->
              
<?php
include 'connection.php';
$query = "select ID, name, amount, email from pitch";
$result = mysqli_query($conn,$query);
$rowcount = mysqli_num_rows($result);
?>
<center><h1 style="color:black;">Pitch status</h1></center>
<center>
       <h2></h2>
        <form action="pitchsearch.php" name="myForm" method="POST">
<input type="text" placeholder="Search pitch for your idea .." name="search">
<button type="submit"><i class="fa fa-search"></i></button></h2>
              <br>
    </form>
              </center><br>
<center><table border="1">
    <tr>
        <th>Id</th>
        <th>Name of the idea</th>
        <th>Amount</th>
        <th>Contact email</th>
    </tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
    $row = mysqli_fetch_array($result);
?>
<tr>
    <td><?php echo $row["ID"] ?></td>
    <td><?php echo $row["name"] ?></td>
    <td><?php echo $row["amount"] ?></td>
    <td><?php echo $row["email"] ?></td>
</tr>
<?php
}
?>
<!--</table>-->
</center>
</body>
</html>
