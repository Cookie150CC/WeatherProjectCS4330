<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
  include_once 'getMonth.php';
    $sql = "SELECT ROUND(AVG(AvgWindSpd), 1) as AWS FROM wind WHERE StationID = '$station' AND Date IN (SELECT Date FROM wind WHERE StationID = '$station' AND MONTH(Date) = $month)";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $monthHistAvgWindSpeedResult = $row['AWS'] . "mph";
        }
    } else {
        echo "NA";
    }
?>
