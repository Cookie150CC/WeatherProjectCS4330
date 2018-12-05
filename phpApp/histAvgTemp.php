<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
  include_once 'getStation.php';
    $sql = "SELECT AVG(AvgTemp) FROM temperature WHERE StationID = '$station' AND MONTH(Date) BETWEEN MONTH('$start') AND MONTH('$end'))";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row["AvgTemp"] != NULL){
            $histAvgTempResult = $row["AvgTemp"] . "&#176;F";
          }else {
            $histAvgTempResult = "NA";
          }
        }
    } else {
        $histAvgTempResult = "NA";
    }

?>
