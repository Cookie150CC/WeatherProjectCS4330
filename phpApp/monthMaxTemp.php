<?php
  include_once 'dbconnect.php';
  include_once 'getStation.php';
  include_once 'getMonth.php';
    $sql = "SELECT Date, MaxTemp FROM temperature WHERE StationID = '$station' AND MaxTemp >= ALL(SELECT MAX(MaxTemp) FROM temperature WHERE StationID = '$station' AND MONTH(Date) = $month AND YEAR(DATE)= '2018') AND Date IN (SELECT Date FROM temperature WHERE MONTH(Date) = $month AND YEAR(DATE)= '2018')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
		        $monthMaxTempResult = $row["MaxTemp"] . "&#176;F (" . $row["Date"] . ")";
        }
    } else {
        echo "NA";
    }
?>
