<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT AVG(Snowfall) FROM precipitation WHERE Date IN (SELECT Date FROM precipitation WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
	echo $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Average Snowfall" . $row["Snowfall"] . '\n';

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
