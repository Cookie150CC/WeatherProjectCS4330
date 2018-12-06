<?php
    include_once 'dbconnect.php';
	   include_once 'getDateRange.php';
     include_once 'getMonth.php';
    $sql = "SELECT AVG(AvgTemp) FROM temperature WHERE StationID = '$station' AND Date IN (SELECT Date FROM temperature WHERE StationID = '$station' AND MONTH(Date) = $month AND YEAR(DATE)= '2018')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row["AvgTemp"] != NULL){
            $monthAvgTempResult = $row["AvgTemp"] . "&#176;F";
          }else {
            $monthAvgTempResult = "NA";
          }
        }
    } else {
        $monthAvgTempResult = "NA";
    }

?>
