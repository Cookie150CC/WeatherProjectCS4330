<?php
      include_once 'dbconnect.php';
  	 include_once 'getDateRange.php';
     include_once 'getMonth.php';
    $sql = "SELECT Date, Fastest5Sec FROM wind WHERE StationID = '$station' AND Fastest5Sec >= ALL(SELECT MAX(Fastest5Sec) FROM wind WHERE StationID = '$station' AND MONTH(Date) = $month AND YEAR(DATE)= '2018') AND Date IN (SELECT Date FROM wind WHERE MONTH(Date) = $month AND YEAR(DATE)= '2018')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $monthMaxWindSpeedResult = $row['Fastest5Sec'] . "mph (" . $row['Date'] . ")";

        }
    } else {
        $monthMaxWindSpeedResult =  "NA";
    }
?>