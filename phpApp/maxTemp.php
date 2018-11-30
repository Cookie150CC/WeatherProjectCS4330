<?php
    $servername = "localhost";
    $username = "root";
    $password = "your_password";
    $dbname = "weather";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Date, MaxTemp FROM temperature WHERE MaxTemp >= ALL(SELECT MAX(MaxTemp) FROM temperature)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Date: " . $row["Date"] . " Max Tempature: " . $row["MaxTemp"] . '\n';

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
