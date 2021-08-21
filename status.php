<html>
<head>
<title>Status</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="style3.css">
    
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
    </style>
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EIconnect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Testimonials</a>
            </li>
            <li class="nav-item1">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!--==============================================================================================================================-->

              <br><br><br>
<?php
session_start();
include 'connection.php';
$user = $_SESSION['user'];
$query1 = "select * from register where Username='$user'";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);
$id = $row1["ID"];
$query = "select ID, docname, date from ideas where user_id=$id";
$result = mysqli_query($conn,$query);
$rowcount = mysqli_num_rows($result);
?>
<center><h1 style="color:black;">Ideas uploaded</h1></center>
<center>
       <h2></h2>
        <form action="pitchsearch.php" name="myForm" method="POST">
<input type="text" placeholder="Check pitch for your idea .." name="search">
<button type="submit"><i class="fa fa-search"></i></button></h2>
              <br>
    </form>
              </center><br>
<center><table border="1">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Date of Upload</th>
    </tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
    $row = mysqli_fetch_array($result);
?>
<tr>
    <td><?php echo $row["ID"] ?></td>
    <td><?php echo $row["docname"] ?></td>
    <td><?php echo $row["date"] ?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>
