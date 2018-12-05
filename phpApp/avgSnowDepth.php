<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT ROUND(AVG(SnowDepth),3) AS ASD FROM precipitation WHERE Date IN (SELECT Date FROM precipitation WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['ASD']!=NULL){
            $avgSnowDepthResult = $row["ASD"] . "\"";
          }else{
            $avgSnowDepthResult = "NA";
          }

        }
    } else {
        echo "NA";
    }
    $conn->close();
?>
