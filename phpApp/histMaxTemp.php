<?php
    include_once 'dbconnect.php';
	  include_once 'getDateRange.php';
    include_once 'getStation.php';
    $sql = "SELECT Date, MaxTemp FROM temperature WHERE StationID = '$station' AND MaxTemp >= ALL(SELECT MAX(MaxTemp) FROM temperature WHERE StationID = '$station' AND MONTH(Date) BETWEEN MONTH('$start') AND MONTH('$end')) AND Date IN (SELECT Date FROM temperature WHERE MONTH(Date) BETWEEN MONTH('$start') AND MONTH('$end'))";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
		        $histMaxTempResult = $row["MaxTemp"] . "&#176;F (" . $row["Date"] . ")";
        }
    } else {
        echo "NA";
    }
?>
