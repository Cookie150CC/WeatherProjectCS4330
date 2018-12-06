<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, SnowDepth FROM precipitation WHERE StationID = '$station' AND SnowDepth >= ALL(SELECT MAX(SnowDepth) FROM precipitation WHERE StationID = '$station' AND MONTH(Date) = $month AND YEAR(DATE)= '2018') AND Date IN (SELECT Date FROM precipitation WHERE MONTH(Date) = $month AND YEAR(DATE)= '2018')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $monthMaxSnowDepthResult = $row["SnowDepth"] . "\" (" . $row["Date"] . ")";

        }
    } else {
        echo "NA";
    }
?>
