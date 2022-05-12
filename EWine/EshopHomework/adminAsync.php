<?php

    $servername = "localhost";
    $username = "eshopuser"; 
    $password = "eshopuserpasswd";
    $dbname = "eshop";

    $idToUpdateToFinish=  $_GET['orderId'];



    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE orders SET  status='finished' WHERE id='$idToUpdateToFinish'";
    $result = mysqli_query($conn, $sql); 
    if($result)
        echo json_encode('success');
    else   
        echo json_encode('failure');
?> 