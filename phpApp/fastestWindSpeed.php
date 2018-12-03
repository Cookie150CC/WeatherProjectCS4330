<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, Fastest5Sec FROM wind WHERE Fastest5Sec >= ALL(SELECT MAX(Fastest5Sec) FROM wind WHERE Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM wind WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
	echo $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Date: " . $row["Date"] . "Fastest Wind Speed " . $row["Fastest5Sec"] . '\n';

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
