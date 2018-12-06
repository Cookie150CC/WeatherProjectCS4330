<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
  include_once 'getMonth.php';
    $sql = "SELECT Date, Precip FROM precipitation WHERE StationID = '$station' AND Precip >= ALL(SELECT MAX(Precip) FROM precipitation WHERE StationID = '$station' AND MONTH(Date) = $month AND YEAR(DATE)= '2018') AND Date IN (SELECT Date FROM precipitation WHERE MONTH(Date) = $month AND YEAR(DATE)= '2018')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
             $monthMaxPrecipitationResult = $row["Precip"] . "\" (" . $row["Date"] . ")";
        }
    } else {
        echo "NA";
    }
?>
