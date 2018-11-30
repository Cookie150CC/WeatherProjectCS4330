<?php include_once 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8"/>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>
    <h1> what would you like to know? </h1>

	<input type="text" name="daterange"/>

	<script>
		$(function() {
  			$('input[name="daterange"]').daterangepicker({
    			opens: 'right'
  			}, function(start, end, label) {
				console.log("  A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
				window.location.href = "index.php?start="+ start.format('YYYY-MM-DD') +"&end="+end.format('YYYY-MM-DD');
  		});
		
		
		});
	</script>

	<h2><?php include_once 'maxTemp.php';?></h2>
	<button type="button" onclick="alert('<?php include_once 'maxTemp.php';?>')">Max Temp</button>

</body>
