<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    *{
        margin:0;
    }
    .liCss li a:hover{
        text-decoration:none;
        background-color:white;
    }
    .liCss{
    padding-right: 9rem;
    padding-left: 9rem;
   font-size: 25px;
    }
      

</style> 
<body>

<nav class="navbar navbar"> 
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div  class="liCss" class="collapse navbar-collapse"  class="myNavbar">
      <ul class="nav navbar-nav navbar-center" class="nav navbar-nav">
        <li class="liCss"> <a href="index.php">Home</a></li>  
        <li class="liCss" ><a href="#">Products</a></li>
        <li class="liCss" ><a href="#">Deals</a></li>
        <li class="liCss" ><a href="#">Stores</a></li>
        <li class="liCss"><a href="#">Contact</a></li> 
        </li>
      </ul> 
    </div>
  </div>
</nav> 
<?php

$servername = "localhost";
$username = "eshopuser"; 
$password = "eshopuserpasswd";
$dbname = "eshop";


session_start();
$email=$_SESSION['uname'];
if($email=="null")
  die("<h1 style='text-align:center; margin-bottom:10rem'>Guests have no purchase history.</h1>");
echo "<h1 style='text-align:center; margin-bottom:10rem'> Welcome to the purchased history page  $email</h1>";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) 
  {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql="SELECT * FROM orders where notification_email='$email'";
  $result= mysqli_query($conn, $sql);
  $rows = mysqli_fetch_all($result);
  $numOfColumns=mysqli_num_fields ($result);
  $numOfRows=mysqli_num_rows($result);
  if($numOfRows==0)
  {
    die("<h1 style='text-align:center; margin-bottom:10rem'>0 orders found from your account.</h1>");
  } 

  echo "<table class='table'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th scope='col'>Order ID</th>";
  echo "<th scope='col'>Order date</th>";
  echo "<th scope='col'>Status</th>";
  echo "<th scope='col'>Notification email</th>"; 
  echo "<th scope='col'>Total cost</th>";
  echo "<th scope='col'>Products</th>";
  echo "<th scope='col'>Way of Payment</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  foreach($rows as $value) 
      for($i=0; $i<$numOfColumns; $i++) 
      {
          //echo "i equal to:". $i . "<br>";
          if($i%7==0) 
          {
            echo"<tr class='$i'>";  // $i%7==0 giati thelw na pernaei mono to ka8e fora prwto stoixeio toy kathe row 
          
          }

          echo "<td>	$value[$i] </td>";
          
          if($i%7==6)
          {
            echo"</tr>";  
          }
      }
      echo "</tbody>";
      echo "</table>";
  ?>
</body>
</html> 