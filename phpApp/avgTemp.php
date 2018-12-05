<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT AVG(AvgTemp) FROM temperature WHERE StationID = '$station' AND Date IN (SELECT Date FROM temperature WHERE StationID = '$station' AND Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row["AvgTemp"] != NULL){
            $avgTempResult = $row["AvgTemp"] . "&#176;F";
          }else {
            $avgTempResult = "NA";
          }
        }
    } else {
        $avgTempResult = "NA";
    }

?>
