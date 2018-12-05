<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT ROUND(AVG(Snowfall),3) AS ASF FROM precipitation WHERE Date IN (SELECT Date FROM precipitation WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['ASF']!=NULL){
            $avgSnowfallResult = $row["ASF"] . "\"";
          }else{
            $avgSnowfallResult = "NA";
          }

        }
    } else {
        echo "NA";
    }

?>
