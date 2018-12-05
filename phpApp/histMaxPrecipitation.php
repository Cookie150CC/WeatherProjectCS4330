<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, Precip FROM precipitation WHERE StationID = '$station' AND Precip >= ALL(SELECT MAX(Precip) FROM precipitation WHERE StationID = '$station' AND MONTH(Date) BETWEEN MONTH('$start') AND MONTH('$end')) AND Date IN (SELECT Date FROM precipitation WHERE MONTH(Date) BETWEEN MONTH('$start') AND MONTH('$end'))";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
             $histMaxPrecipitationResult = $row["Precip"] . "\" (" . $row["Date"] . ")";
        }
    } else {
        echo "NA";
    }
?>
