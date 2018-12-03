<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, Precip FROM precipitation WHERE Precip >= ALL(SELECT MAX(Precip) FROM precipitation WHERE Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM precipitation WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
	echo $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Date: " . $row["Date"] . "Max Precipitation" . $row["Precip"] . '\n';

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
