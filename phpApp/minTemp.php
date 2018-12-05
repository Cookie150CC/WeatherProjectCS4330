<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, MinTemp FROM temperature WHERE StationID = '$station' AND MinTemp <= ALL(SELECT MIN(MinTemp) FROM temperature WHERE StationID = '$station' AND Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM temperature WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['MinTemp'] != NULL){
            $minTempResult = $row["MinTemp"] . "&#176;F (" . $row["Date"] . ")";
          }else{
              $minTempResult = "NA";
          }
        }
    } else {
        $minTempResult = "NA";
    }
?>
