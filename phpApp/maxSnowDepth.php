<?php
    include_once 'dbconnect.php';
	include_once 'getDateRange.php';
    $sql = "SELECT Date, SnowDepth FROM precipitation WHERE SnowDepth >= ALL(SELECT MAX(SnowDepth) FROM precipitation WHERE Date BETWEEN '$start' AND '$end') AND Date IN (SELECT Date FROM precipitation WHERE Date BETWEEN '$start' AND '$end')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $maxSnowDepthResult = $row["SnowDepth"] . "\" (" . $row["Date"] . ")";

        }
    } else {
        echo "NA";
    }
?>
