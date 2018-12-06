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

<div class="navbar">
  <h1><i class="fas fa-cloud-sun fa-2x"></i> Weather App</h1>
<ul>
  <li class=<?php include_once 'getStation.php'; if ($station == "US1MTGN0011"){echo "active";} else {echo "";} ?>><a href="index.php?station=US1MTGN0011"><i class="fas fa-map-marker-alt"></i> Kalamazoo, MI</a></li>
  <li class=<?php include_once 'getStation.php'; if ($station == "USC00090140"){echo "active";} else {echo "";} ?>><a href="index.php?station=USC00090140"><i class="fas fa-map-marker-alt"></i> Oxnard, CA</a></li>
  <li class=<?php include_once 'getStation.php'; if ($station == "USC00503502"){echo "active";} else {echo "";} ?>><a href="index.php?station=USC00503502"><i class="fas fa-map-marker-alt"></i> International Falls, MN</a></li>
  <li class=<?php include_once 'getStation.php'; if ($station == "USW00014918"){echo "active";} else {echo "";} ?>><a href="index.php?station=USW00014918"><i class="fas fa-map-marker-alt"></i> Haines, AK</a></li>
  <li class=<?php include_once 'getStation.php'; if ($station == "USW00093110"){echo "active";} else {echo "";} ?>><a href="index.php?station=USW00093110"><i class="fas fa-map-marker-alt"></i> Albany, GA</a></li>
  <li class=<?php include_once 'getStation.php'; if ($station == "USW00094815"){echo "active";} else {echo "";} ?>><a href="index.php?station=USW00094815"><i class="fas fa-map-marker-alt"></i> Bozeman, MT</a></li>
</ul>
</div>
<?php
  if(isset($_GET{"station"})){
    if($_GET{"station"} ==  US1MTGN0011){
      echo "<h2 class='station_title'><i class='fas fa-map-marked-alt fa-2x'></i> Kalamazoo, MI</h2>";
    }else if($_GET{"station"} ==  USC00090140){
      echo "<h2 class='station_title'><i class='fas fa-map-marked-alt fa-2x'></i> Oxnard, CA</h2>";
    }else if($_GET{"station"} ==  USC00503502){
      echo "<h2 class='station_title'><i class='fas fa-map-marked-alt fa-2x'></i> International Falls, MN</h2>";
    }else if($_GET{"station"} ==  USW00014918){
      echo "<h2 class='station_title'><i class='fas fa-map-marked-alt fa-2x'></i> Haines, AK</h2>";
    }else if($_GET{"station"} ==  USW00093110){
      echo "<h2 class='station_title'><i class='fas fa-map-marked-alt fa-2x'></i> Albany, GA</h2>";
    }else if($_GET{"station"} ==  USW00094815){
      echo "<h2 class='station_title'><i class='fas fa-map-marked-alt fa-2x'></i> Bozeman, MT</h2>";
    }
  }else{
    echo "<h2 class='station_title'><i class='fas fa-map-marked-alt fa-2x'></i> Select a Station</h2>";
  }
?>


<div class="row_container">
  <h2><i class="far fa-calendar-alt"></i> Choose a Date Range: </h2>
   <input type="text" name="daterange" value=""/>
  <div class="row">
  <div class="column">
    <div class="card">
      <h3><i class="fas fa-chart-line"></i> Most Recent Results for <?php if(isset($_GET{"start"})){echo $_GET['start'] . " - " . $_GET['end'];}?></h3>
      <div class="row_info">
        <div class="column_info">
          <p><i class="fas fa-temperature-high"></i> Max Temperature: <?php include_once 'maxTemp.php'; echo $maxTempResult; ?></p>
          <p><i class="fas fa-temperature-low"></i> Min Temperature: <?php include_once 'minTemp.php'; echo $minTempResult; ?></p>
          <p><i class="fas fa-thermometer-half"></i> Avg Temperature: <?php include_once 'avgTemp.php'; echo $avgTempResult; ?></p>
          <p><i class="fas fa-wind"></i> Max Windspeed: <?php include_once 'fastestWindSpeed.php'; echo $maxWindSpeedResult; ?></p>
          <p><i class="fas fa-wind"></i> Avg Windspeed: <?php include_once 'avgWindSpeed.php'; echo $avgWindSpeedResult; ?></p>
        </div>
      <div class="column_info">
        <p><i class="fas fa-cloud-showers-heavy"></i> Max Precipitation: <?php include_once 'maxPrecipitation.php'; echo $maxPrecipitationResult; ?></p>
        <p><i class="fas fa-cloud-rain"></i> Avg Precipitation: <?php include_once 'avgPrecipitation.php'; echo $avgPrecipitationResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snowfall: <?php include_once 'maxSnowfall.php'; echo $maxSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snowfall: <?php include_once 'avgSnowfall.php'; echo $avgSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snow Depth: <?php include_once 'maxSnowDepth.php'; echo $maxSnowDepthResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snow Depth: <?php include_once 'avgSnowDepth.php'; echo $avgSnowDepthResult; ?></p>
      </div>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3><i class="fas fa-chart-line"></i> Results Since 1950 for
        <?php
            if(isset($_GET{"start"})){
              $temp = $_GET['start'];
              $tempArr = explode("-",$temp,2);
              echo $tempArr[1] . " - ";
              $temp = $_GET['end'];
              $tempArr = explode("-",$temp,2);
              echo $tempArr[1];
            }
          ?>
      </h3>
      <div class="row_info">
        <div class="column_info">
          <p><i class="fas fa-temperature-high"></i> Max Temperature: <?php include_once 'histMaxTemp.php'; echo $histMaxTempResult; ?></p>
          <p><i class="fas fa-temperature-low"></i> Min Temperature: <?php include_once 'histMinTemp.php'; echo $histMinTempResult; ?></p>
          <p><i class="fas fa-thermometer-half"></i> Avg Temperature: <?php include_once 'histAvgTemp.php'; echo $histAvgTempResult; ?></p>
          <p><i class="fas fa-wind"></i> Max Windspeed: <?php include_once 'histFastestWindSpeed.php'; echo $histMaxWindSpeedResult; ?></p>
          <p><i class="fas fa-wind"></i> Avg Windspeed: <?php include_once 'histAvgWindSpeed.php'; echo $histAvgWindSpeedResult; ?></p>
        </div>
      <div class="column_info">
        <p><i class="fas fa-cloud-showers-heavy"></i> Max Precipitation: <?php include_once 'histMaxPrecipitation.php'; echo $histMaxPrecipitationResult; ?></p>
        <p><i class="fas fa-cloud-rain"></i> Avg Precipitation: <?php include_once 'histAvgPrecipitation.php'; echo $histAvgPrecipitationResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snowfall: <?php include_once 'histMaxSnowfall.php'; echo $histMaxSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snowfall: <?php include_once 'histAvgSnowfall.php'; echo $histAvgSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snow Depth: <?php include_once 'histMaxSnowDepth.php'; echo $histMaxSnowDepthResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snow Depth: <?php include_once 'histAvgSnowDepth.php'; echo $histAvgSnowDepthResult; ?></p>
      </div>
    </div>
    </div>
  </div>
</div>
</div>



<div class="row_container">
  <h2><i class="far fa-calendar-minus"></i> Choose a Month:</h2>
  <select id='month' onchange="show_month(this)">
     <option value=''>--Select Month--</option>
     <option value='1'>Janaury</option>
     <option value='2'>February</option>
     <option value='3'>March</option>
     <option value='4'>April</option>
     <option value='5'>May</option>
     <option value='6'>June</option>
     <option value='7'>July</option>
     <option value='8'>August</option>
     <option value='9'>September</option>
     <option value='10'>October</option>
     <option value='11'>November</option>
     <option value='12'>December</option>
   </select>
  <div class="row">
  <div class="column">
    <div class="card">
      <h3>Most Recent Results for <?php if(isset($_GET{"month"})){ include_once 'getMonthString.php'; echo $monthString; } ?></h3>
      <div class="row_info">
        <div class="column_info">
          <p><i class="fas fa-temperature-high"></i> Max Temperature: <?php include_once 'monthMaxTemp.php'; echo $monthMaxTempResult; ?></p>
          <p><i class="fas fa-temperature-low"></i> Min Temperature: <?php include_once 'monthMinTemp.php'; echo $monthMinTempResult; ?></p>
          <p><i class="fas fa-thermometer-half"></i> Avg Temperature: <?php include_once 'monthAvgTemp.php'; echo $monthAvgTempResult; ?></p>
          <p><i class="fas fa-wind"></i> Max Windspeed: <?php include_once 'monthFastestWindSpeed.php'; echo $monthMaxWindSpeedResult; ?></p>
          <p><i class="fas fa-wind"></i> Avg Windspeed: <?php include_once 'monthAvgWindSpeed.php'; echo $monthAvgWindSpeedResult; ?></p>
        </div>
      <div class="column_info">
        <p><i class="fas fa-cloud-showers-heavy"></i> Max Precipitation: <?php include_once 'monthMaxPrecipitation.php'; echo $monthMaxPrecipitationResult; ?></p>
        <p><i class="fas fa-cloud-rain"></i> Avg Precipitation: <?php include_once 'monthAvgPrecipitation.php'; echo $monthAvgPrecipitationResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snowfall: <?php include_once 'monthMaxSnowfall.php'; echo $monthMaxSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snowfall: <?php include_once 'monthAvgSnowfall.php'; echo $monthAvgSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snow Depth: <?php include_once 'monthMaxSnowDepth.php'; echo $monthMaxSnowDepthResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snow Depth: <?php include_once 'monthAvgSnowDepth.php'; echo $monthAvgSnowDepthResult; ?></p>
      </div>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Results Since 1972 for <?php if(isset($_GET{"month"})){ include_once 'getMonthString.php'; echo $monthString; } ?></h3>
      <div class="row_info">
        <div class="column_info">
          <p><i class="fas fa-temperature-high"></i> Max Temperature: <?php include_once 'monthHistMaxTemp.php'; echo $monthHistMaxTempResult; ?></p>
          <p><i class="fas fa-temperature-low"></i> Min Temperature: <?php include_once 'monthHistMinTemp.php'; echo $monthHistMinTempResult; ?></p>
          <p><i class="fas fa-thermometer-half"></i> Avg Temperature: <?php include_once 'monthHistAvgTemp.php'; echo $monthHistAvgTempResult; ?></p>
          <p><i class="fas fa-wind"></i> Max Windspeed: <?php include_once 'monthHistFastestWindSpeed.php'; echo $monthHistMaxWindSpeedResult; ?></p>
          <p><i class="fas fa-wind"></i> Avg Windspeed: <?php include_once 'monthHistAvgWindSpeed.php'; echo $monthHistAvgWindSpeedResult; ?></p>
        </div>
      <div class="column_info">
        <p><i class="fas fa-cloud-showers-heavy"></i> Max Precipitation: <?php include_once 'monthHistMaxPrecipitation.php'; echo $monthHistMaxPrecipitationResult; ?></p>
        <p><i class="fas fa-cloud-rain"></i> Avg Precipitation: <?php include_once 'monthHistAvgPrecipitation.php'; echo $monthHistAvgPrecipitationResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snowfall: <?php include_once 'monthHistMaxSnowfall.php'; echo $monthHistMaxSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snowfall: <?php include_once 'monthHistAvgSnowfall.php'; echo $monthHistAvgSnowfallResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Max Snow Depth: <?php include_once 'monthHistMaxSnowDepth.php'; echo $monthHistMaxSnowDepthResult; ?></p>
        <p><i class="fas fa-snowflake"></i> Avg Snow Depth: <?php include_once 'monthHistAvgSnowDepth.php'; echo $monthHistAvgSnowDepthResult; ?></p>
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

    // $(function() {
    //     $("li").click(function() {
    //         // remove classes from all
    //         $("li").removeClass("active");
    //         // add class to the one we clicked
    //         $(this).addClass("active");
    //     });
    // });


	});


  function show_month(obj) {
        window.location.href = window.location.href + "&month=" + obj.selectedIndex;
}
</script>

<!-- <script>
    if (!window.location.href.includes("?")){
        window.location.href = window.location.href + "?start=&end=&city=";
    }
</script> -->

</body>
