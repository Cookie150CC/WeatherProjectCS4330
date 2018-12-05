<?php
    include_once 'dbconnect.php';
	  include_once 'getDateRange.php';
    include_once 'getStation.php';
    $sql = "SELECT Date, Fastest5Sec FROM wind WHERE StationID = '$station' AND Fastest5Sec >= ALL(SELECT MAX(Fastest5Sec) FROM wind WHERE StationID = '$station' AND MONTH(Date) BETWEEN MONTH('$start') AND MONTH('$end'))";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
		        $histMaxWindSpeedResult = $row['Fastest5Sec'] . "mph (" . $row['Date'] . ")";
        }
    } else {
        echo "NA";
    }
?>
