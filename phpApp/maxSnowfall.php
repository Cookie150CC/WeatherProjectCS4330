<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, Snowfall FROM precipitation WHERE StationID = '$station' AND Snowfall >= ALL(SELECT MAX(Snowfall) FROM precipitation WHERE StationID = '$station' AND Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM precipitation WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $maxSnowfallResult = $row["Snowfall"] . "\" (" . $row["Date"] . ")";

        }
    } else {
        echo "NA";
    }
?>
