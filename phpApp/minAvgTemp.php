<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, AvgTemp FROM temperature WHERE AvgTemp <= ALL(SELECT MIN(AvgTemp) FROM temperature WHERE Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM temperature WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
	echo $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Date: " . $row["Date"] . "Min Average Temperature" . $row["AvgTemp"] . '\n';

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
