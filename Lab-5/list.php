<?php
$username = "root";
$password = "";
$database = "students";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM table_1";

echo "<b> <center>Database Output</center> </b> <br> <br>";
if ($result = $mysqli->query($query)) {
    echo '<table style="width:100%">';
    echo '<tr style="font-size: 20px; font-weight:bold;">';
    echo '<td>ID</td>';	
    echo '<td>Firstname</td>';
    echo '<td>Lastname</td>';
    echo '<td>Gender</td>';
    echo '<td>Semester</td>';
    echo '<td>SymbolNumber</td>';
    echo '<td>Batch</td>';
    echo '</tr>';
    while ($row = $result->fetch_assoc()) {
        $id = $row["ID"];
        $firstname = $row["Firstname"];
        $lastname = $row["Lastname"];
        $gender = $row["Gender"];
        $gender_display = ($gender === 0) ? "Female" : "Male";
        $semester = $row["Semester"];
        $symbol = $row["SymbolNumber"];
        $batch = $row["Batch"];
        echo '<tr style="font-size:18px">';
        echo '<td>' . $id . '</td>';
        echo '<td>' . $firstname . '</td>';
        echo '<td>' . $lastname . '</td>';
        echo '<td>' . $gender_display . '</td>';
        echo '<td>' . $semester. '</td>';
        echo '<td>' . $symbol. '</td>';
        echo '<td>' . $batch . '</td>';
        echo '</tr>';
    }
    $result->free();
}
?>