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

    $sql = "SELECT Date FROM temperature";
    $result = mysql_query($sql);

    echo "<select name='Date'>";
    while ($row = mysql_fetch_array($result)) {
        echo "<option value='" . $row['Date'] . "'>" . $row['Date'] . "</option>";
    }
    echo "</select>";

    $conn->close();
?>
