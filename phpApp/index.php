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
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<body>

<ul>
  <li><a href="index.php?station=US1MTGN0011">Kalamazoo, MI</a></li>
  <li><a href="index.php?station=USC00090140">Oxnard, CA</a></li>
  <li><a href="index.php?station=USC00503502">International Falls, MN</a></li>
  <li><a href="index.php?station=USW00014918">Haines, AK</a></li>
  <li><a href="index.php?station=USW00093110">Albany, GA</a></li>
  <li><a href="index.php?station=USW00094815">Bozeman, MT</a></li>
</ul>


<div class="row_container">
  <h2>Choose a Date Range: </h2>
   <input type="text" name="daterange" value=""/>
  <div class="row">
  <div class="column">
    <div class="card">
      <h3>Most Recent Results for <?php echo $_GET['start'] . " - " . $_GET['end'];?></h3>
      <div class="row_info">
        <div class="column_info">
          <p>Max Temperature: <?php include_once 'maxTemp.php'; echo $maxTempResult; ?></p>
          <p>Min Temperature: <?php include_once 'minTemp.php'; echo $minTempResult; ?></p>
          <p>Avg Temperature: <?php include_once 'avgTemp.php'; echo $avgTempResult; ?></p>
          <p>Max Windspeed: <?php include_once 'fastestWindSpeed.php'; echo $maxWindSpeedResult; ?></p>
          <p>Avg Windspeed: <?php include_once 'avgWindSpeed.php'; echo $avgWindSpeedResult; ?></p>
        </div>
      <div class="column_info">
        <p>Max Precipitation: <?php include_once 'maxPrecipitation.php'; echo $maxPrecipitationResult; ?></p>
        <p>Avg Precipitation: <?php include_once 'avgPrecipitation.php'; echo $avgPrecipitationResult; ?></p>
        <p>Max Snowfall: <?php include_once 'maxSnowfall.php'; echo $maxSnowfallResult; ?></p>
        <p>Avg Snowfall: <?php include_once 'avgSnowfall.php'; echo $avgSnowfallResult; ?></p>
        <p>Max Snow Depth: <?php include_once 'maxSnowDepth.php'; echo $maxSnowDepthResult; ?></p>
        <p>Avg Snow Depth: <?php include_once 'avgSnowDepth.php'; echo $avgSnowDepthResult; ?></p>
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
    function active(tab){
        console.log(tab)
        if (window.location.href.includes(tab)){
            return "active";
        }
    }
    function start(){
        if (!window.location.href.includes(cityName)){
            updateVar("city", cityName);
            // openCity(cityName,elmnt,color);
        }
    }

    function updateVar(start, end) {
        let url = window.location.href;
        let tmp1 = url.split("?");
        let base = tmp1[0];
        let tmp2 = tmp1[1].split("&");
        let newPart = "?";
        let varName1="start";
        let varName2="end";
        for (let i=0; i<tmp2.length; i++){
            if (tmp2[i].includes(varName1)){
                tmp2[i] = varName1 + "=" + start;
            }
            if (tmp2[i].includes(varName2)){
                tmp2[i] = varName2 + "=" + end;
            }
            console.log("tmp2[i]   ", tmp2[i], " , ", i);
        }
        console.log("varname1, varname2   ", varName1, "     ", varName2);

        for(let i=0; i<tmp2.length-1; i++){
            newPart = newPart + tmp2[i] + "&";
        }
        newPart = newPart + tmp2[tmp2.length-1]

        // console.log("base is", base);
        console.log("new part", newPart);

        if (url.includes("start") || url.includes("end")){
            window.location.href = newPart;
        }
        else{
            window.location.href = newPart + "&" + varName1 + "=" + start + "&" + varName2 + "=" + end;
        }


    }

	$(function() {
			$('input[name="daterange"]').daterangepicker({
  			   opens: 'right',
           autoUpdateInput: true,
           locale:{
             cancelLabel: 'Clear'
           }
			}, function(start, end) {
			     console.log("  A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
			    //  window.location.href = "index.php?start="+ start.format('YYYY-MM-DD') +"&end="+end.format('YYYY-MM-DD');
                updateVar(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
                // updateVar("end", end.format('YYYY-MM-DD'));
		  });

      $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
        });


	});
</script>

<!-- <script>
    if (!window.location.href.includes("?")){
        window.location.href = window.location.href + "?start=&end=&city=";
    }
</script> -->

</body>
