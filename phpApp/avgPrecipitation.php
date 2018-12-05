<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT ROUND(AVG(Precip),3) AS AP FROM precipitation WHERE StationID = '$station' AND Date IN (SELECT Date FROM precipitation WHERE StationID = '$station' AND Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['AP']!=NULL){
            $avgPrecipitationResult = $row["AP"] . "\"";
          }else{
            $avgPrecipitationResult = "NA";
          }
        }
    } else {
        $avgPrecipitationResult = "NA";
    }

?>
