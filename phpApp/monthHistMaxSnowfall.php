<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    include_once 'getMonth.php';
    $sql = "SELECT Date, Snowfall FROM precipitation WHERE StationID = '$station' AND Snowfall >= ALL(SELECT MAX(Snowfall) FROM precipitation WHERE StationID = '$station' AND MONTH(Date) = $month) AND Date IN (SELECT Date FROM precipitation WHERE MONTH(Date) = $month )";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $monthHistMaxSnowfallResult = $row["Snowfall"] . "\" (" . $row["Date"] . ")";

        }
    } else {
        echo "NA";
    }
?>
