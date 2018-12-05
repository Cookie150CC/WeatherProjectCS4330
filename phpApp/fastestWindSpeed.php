<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, Fastest5Sec FROM wind WHERE StationID = '$station' AND Fastest5Sec >= ALL(SELECT MAX(Fastest5Sec) FROM wind WHERE StationID = '$station' AND Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM wind WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $maxWindSpeedResult = $row['Fastest5Sec'] . "mph (" . $row['Date'] . ")";

        }
    } else {
        $maxWindSpeedResults =  "NA";
    }
?>
