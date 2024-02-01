<?php
    $servername="localhost";
    $username = "root";
    $password = "";
    $dbname = "students";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn->connect_error)
    {
        die("Database Connection Fail".$conn->connect_error);
    }
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $gender = $_REQUEST['gender'];
    $semester = $_REQUEST['semester'];
    $symbol = $_REQUEST['symbol'];
    $batch = $_REQUEST['batch'];

    $sql = "INSERT INTO table_1 (Firstname, Lastname, Gender, Semester, SymbolNumber, Batch) VALUES ('$firstname', '$lastname', '$gender', '$semester', '$symbol', '$batch')";
    if (mysqli_query($conn, $sql))
    {
        header('Location: form.html');
    }
    else
    {
        echo "ERROR: Hush! Sorry $sql." . mysqli_error($conn);
    }
?>