<?php

function PasswordCheck($password_string)
{
    $password_string = trim($password_string);
    if($password_string == '')
    {
      return 0;
    }
    elseif(strlen($password_string) < 6)  
    {
      return 0;
    }
    /*elseif(!(preg_match('#[0-9]#', $password_string))) 
    {
      return 0;
    }*/
    else
    {
      return 1;
    }
}

    $servername = "localhost";
    $username = "eshopuser"; 
    $password = "eshopuserpasswd";
    $dbname = "eshop";


    $userFname= $_GET['fname'];
    $userEmail = $_GET['email'];
    $userAge= $_GET['Age'];
    $userPhone= $_GET['Phone'];
    $userPassword= $_GET['Password'];

 
    $validatedUserPasswordRes =PasswordCheck($userPassword);
    if($validatedUserPasswordRes==0)
        die ("Password failed at validation");
        
    $hashedUserPassword= md5($userPassword);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO  users( user_email, fullname,age,phone,password)
    VALUES('$userEmail', '$userFname', '$userAge', '$userPhone', '$hashedUserPassword')";
    $result = mysqli_query($conn, $sql); 

    

    if ($result) 
    {
      $sql2 = "SELECT  id FROM users WHERE user_email= '$userEmail'";
      $result2 = mysqli_query($conn, $sql2); 
      $row = mysqli_fetch_array($result2);
      $id=$row["id"];
      echo $id;
      
      $sql3= "INSERT INTO user_has_role(user_id, role_id) VALUES('$id', (select id FROM roles WHERE name='user') )";
      $result3 = mysqli_query($conn, $sql3);
      header('Location: index.php');
    }

    else 
    {
    echo "0 results"; 
    }

    $conn->close(); 
?> 