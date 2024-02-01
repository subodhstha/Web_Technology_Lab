<?php
    $servername="localhost";
    $username = "root";
    $password = "";
    
    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error)
    {
        die("Database Connection Fail".$conn->connect_error);
    }
    $sql = "CREATE DATABASE students";
    if (mysqli_query($conn, $sql))
    {
        echo "Database created successfully";
    }
    else
    {
        echo "Error while creating Database" . $conn->error;
    }
    $conn->close();
?>