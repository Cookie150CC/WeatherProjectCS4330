<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, MaxTemp FROM temperature WHERE MaxTemp >= ALL(SELECT MAX(MaxTemp) FROM temperature WHERE Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM temperature WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
	echo $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Date: " . $row["Date"] . "Max Temperature " . $row["MaxTemp"] . '\n';

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
