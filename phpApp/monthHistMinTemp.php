<?php
    include_once 'dbconnect.php';
     include_once 'getMonth.php';
    $sql = "SELECT Date, MinTemp FROM temperature WHERE StationID = '$station' AND MinTemp <= ALL(SELECT MIN(MinTemp) FROM temperature WHERE StationID = '$station' AND MONTH(Date) = $month) AND Date IN (SELECT Date FROM temperature WHERE MONTH(Date) = $month)";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['MinTemp'] != NULL){
            $monthHistMinTempResult = $row["MinTemp"] . "&#176;F (" . $row["Date"] . ")";
          }else{
              $monthHistMinTempResult = "NA";
          }
        }
    } else {
        $monthHistMinTempResult = "NA";
    }
?>
