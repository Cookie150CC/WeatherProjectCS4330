<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT ROUND(AVG(Snowfall),3) AS ASF FROM precipitation WHERE StationID = '$station' AND Date IN (SELECT Date FROM precipitation WHERE StationID = '$station' AND MONTH(Date) BETWEEN MONTH('$start') AND MONTH('$end'))";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['ASF']!=NULL){
            $histAvgSnowfallResult = $row["ASF"] . "\"";
          }else{
            $histAvgSnowfallResult = "NA";
          }

        }
    } else {
        echo "NA";
    }

?>
