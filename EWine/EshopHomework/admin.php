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
<body>
<?php

session_start();
$uname= $_SESSION['uname'];

$servername = "localhost";
$username = "eshopuser"; 
$password = "eshopuserpasswd";
$dbname = "eshop";

if($uname=='null')
{
    echo "You do not have such permission to access this page";
}





else
{

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT  id  FROM user_has_role WHERE user_id= (SELECT id FROM users WHERE user_email='$uname') AND role_id= (SELECT id from roles WHERE name='admin') "; 
    $result = mysqli_query($conn, $sql); //returns mysql_i_obj type
    $row = mysqli_fetch_array($result);  // Returns an array of strings  of 1 fetched row, or null 


    if($row!=null) // ean eimai admin to row tha exei to id toy user alliws null 
    {
        echo "<h1 style='text-align:center; margin-bottom:10rem'> Welcome to the Administration page</h1>";

        $sqlSelectAll="SELECT * FROM orders";
        $resultSelectAll= mysqli_query($conn, $sqlSelectAll);
        $rows = mysqli_fetch_all($resultSelectAll); //returns all the result. mysqli_fetch_array returns only the first result

        $numOfColumns=mysqli_num_fields ($resultSelectAll);
        $numOfRows=mysqli_num_rows($resultSelectAll);
        
        $counter=0;
        /*foreach($rows as $value)
            for($i=0; $i<$numOfColumns; $i++)
            {
                echo $value[$i]." ";
                $counter++;
                if($counter%7==0)
                    echo"<br>";
            }*/

        
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
        echo "<th scope='col'>Complete</th>";
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
                    echo "<td> <button id='$value[0]' onclick='completeOrder(this.id)' class='btn btn-success dropdown-toggle'> Complete</button></td>"; // $i%7==6 giati thelw na pernaei to last apo ta stoixeia toy kathe row, ==6 giati exw 7 columns
                    echo"</tr>";  
                }
            }
            echo "</tbody>";
            echo "</table>";

    }     


    else
        die ("A user does not have access to this page." . $conn->connect_error);
    $conn->close(); 
}
?>

<script>
    function completeOrder(id)
    {   
        
        $.ajax
        ({
            url: "adminAsync.php", 
            type: 'GET',
            data: { "orderId": id}, 

            success: function(textStatus ) 
            {
                    location.reload(); 
            },

            error:function (xhr, ajaxOptions, thrownError)
            {
                if(xhr.status==404) 
                {
                    alert(thrownError);
                }
            }

        });
    }
</script>
</body>
</html>  