<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
  include_once 'getMonth.php';
    $sql = "SELECT ROUND(AVG(Precip),3) AS AP FROM precipitation WHERE StationID = '$station' AND Date IN (SELECT Date FROM precipitation WHERE StationID = '$station' AND MONTH(Date) = $month )";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['AP']!=NULL){
            $monthHistAvgPrecipitationResult = $row["AP"] . "\"";
          }else{
            $monthHistAvgPrecipitationResult = "NA";
          }
        }
    } else {
        $monthHistAvgPrecipitationResult = "NA";
    }

?>
