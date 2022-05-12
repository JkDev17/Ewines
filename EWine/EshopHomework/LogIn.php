<?php

    $servername = "localhost";
    $username = "eshopuser"; 
    $password = "eshopuserpasswd";
    $dbname = "eshop";

    $userEmail = $_GET['email'];
    $userPassword= $_GET['Password'];
        
    $hashedUserPassword= md5($userPassword);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT  user_email,password FROM users WHERE user_email= '$userEmail' AND password='$hashedUserPassword'"; 

    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_array($result);

    if($row!=null)
    {
        echo "yey";
        session_start();
        $_SESSION['uname'] = $userEmail;
        header('Location: secondPage.php');
    }

    else
        echo "error fetching user from database";
    $conn->close(); 
?>  