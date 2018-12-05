<?php include_once 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8"/>
  <title>Weather App</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>
<div id="Kalamazoo" class="tabcontent">
  <h1>The Weather App</h1>
  <h2>Kalamazoo, MI</h2>
</div>

<div id="Other1" class="tabcontent">
  <h1>The Weather App</h1>
  <h2>Other1, US</h2>
</div>

<div id="Other2" class="tabcontent">
  <h1>The Weather App</h1>
  <h2>Other2, US</h2>
</div>

<div id="Other3" class="tabcontent">
  <h1>The Weather App</h1>
  <h2>Other3, US</h2>
</div>

<button class="tablink" onclick="openCity('Kalamazoo', this, '#336699')" id="defaultOpen">Kalamazoo</button>
<button class="tablink" onclick="openCity('Other1', this, '#339966')">Other1</button>
<button class="tablink" onclick="openCity('Other2', this, '#336699')">Other2</button>
<button class="tablink" onclick="openCity('Other3', this, '#339966')">Other3</button>


<div class="row_container">
  <h2>Choose a Date Range: </h2>
   <input type="text" name="daterange" value=""/>
  <div class="row">
  <div class="column">
    <div class="card">
      <h3>Most Recent Results for <?php echo $_GET['start'] . " - " . $_GET['end'];?></h3>
      <div class="row_info">
        <div class="column_info">
          <p>Max Temperature:<?php include_once 'maxTemp.php'; echo $maxTempResult; ?></p>
          <p>Min Temperature:</p>
          <p>Avg Temperature:</p>
          <p>Max Windspeed:</p>
          <p>Avg Windspeed</p>
        </div>
      <div class="column_info">
        <p>Max Precipitation:</p>
        <p>Avg Precipitation:</p>
        <p>Max Snowfall:</p>
        <p>Avg Snowfall:</p>
        <p>Max Snow Depth:</p>
        <p>Avg Snow Depth:</p>
      </div>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Results Since 1972 for <?php echo $_GET['start'] . " - " . $_GET['end'];?></h3>
      <div class="row_info">
        <div class="column_info">
          <p>Max Temperature:</p>
          <p>Min Temperature:</p>
          <p>Avg Temperature:</p>
          <p>Max Windspeed:</p>
          <p>Avg Windspeed</p>
        </div>
      <div class="column_info">
        <p>Max Precipitation:</p>
        <p>Avg Precipitation:</p>
        <p>Max Snowfall:</p>
        <p>Avg Snowfall:</p>
        <p>Max Snow Depth:</p>
        <p>Avg Snow Depth:</p>
      </div>
    </div>
    </div>
  </div>
</div>
</div>

<div class="row_container">
  <h2>Choose a Date Range: </h2>
   <input type="text" name="daterange" value=""/>
  <div class="row">
  <div class="column">
    <div class="card">
      <h3>Most Recent Results for <?php echo $_GET['start'] . " - " . $_GET['end'];?></h3>
      <div class="row_info">
        <div class="column_info">
          <p>Max Temperature:<?php include_once 'maxTemp.php'; echo $maxTempResult; ?></p>
          <p>Min Temperature:</p>
          <p>Avg Temperature:</p>
          <p>Max Windspeed:</p>
          <p>Avg Windspeed</p>
        </div>
      <div class="column_info">
        <p>Max Precipitation:</p>
        <p>Avg Precipitation:</p>
        <p>Max Snowfall:</p>
        <p>Avg Snowfall:</p>
        <p>Max Snow Depth:</p>
        <p>Avg Snow Depth:</p>
      </div>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Results Since 1972 for <?php echo $_GET['start'] . " - " . $_GET['end'];?></h3>
      <div class="row_info">
        <div class="column_info">
          <p>Max Temperature:</p>
          <p>Min Temperature:</p>
          <p>Avg Temperature:</p>
          <p>Max Windspeed:</p>
          <p>Avg Windspeed</p>
        </div>
      <div class="column_info">
        <p>Max Precipitation:</p>
        <p>Avg Precipitation:</p>
        <p>Max Snowfall:</p>
        <p>Avg Snowfall:</p>
        <p>Max Snow Depth:</p>
        <p>Avg Snow Depth:</p>
      </div>
    </div>
    </div>
  </div>
</div>
</div>

<div class="row_container">
  <h2>Choose a Date Range: </h2>
   <input type="text" name="daterange" value=""/>
  <div class="row">
  <div class="column">
    <div class="card">
      <h3>Most Recent Results for <?php echo $_GET['start'] . " - " . $_GET['end'];?></h3>
      <div class="row_info">
        <div class="column_info">
          <p>Max Temperature:<?php include_once 'maxTemp.php'; echo $maxTempResult; ?></p>
          <p>Min Temperature:</p>
          <p>Avg Temperature:</p>
          <p>Max Windspeed:</p>
          <p>Avg Windspeed</p>
        </div>
      <div class="column_info">
        <p>Max Precipitation:</p>
        <p>Avg Precipitation:</p>
        <p>Max Snowfall:</p>
        <p>Avg Snowfall:</p>
        <p>Max Snow Depth:</p>
        <p>Avg Snow Depth:</p>
      </div>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Results Since 1972 for <?php echo $_GET['start'] . " - " . $_GET['end'];?></h3>
      <div class="row_info">
        <div class="column_info">
          <p>Max Temperature:</p>
          <p>Min Temperature:</p>
          <p>Avg Temperature:</p>
          <p>Max Windspeed:</p>
          <p>Avg Windspeed</p>
        </div>
      <div class="column_info">
        <p>Max Precipitation:</p>
        <p>Avg Precipitation:</p>
        <p>Max Snowfall:</p>
        <p>Avg Snowfall:</p>
        <p>Max Snow Depth:</p>
        <p>Avg Snow Depth:</p>
      </div>
    </div>
    </div>
  </div>
</div>
</div>

<script>
    function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();


	$(function() {
			$('input[name="daterange"]').daterangepicker({
  			   opens: 'right',
           autoUpdateInput: true,
           locale:{
             cancelLabel: 'Clear'
           }
			}, function(start, end) {
			     console.log("  A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
			     window.location.href = "index.php?start="+ start.format('YYYY-MM-DD') +"&end="+end.format('YYYY-MM-DD');
		  });

      $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
        });


	});
</script>

</body>
