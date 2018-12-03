<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT AVG(AvgWindSpd) FROM wind WHERE Date IN (SELECT Date FROM wind WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
	echo $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Average Wind Speed " . $row["AvgWindSpd"] . '\n';

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
