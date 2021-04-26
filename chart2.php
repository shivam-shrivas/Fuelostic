<?php
session_start();
// Create connection
$conn=mysqli_connect("localhost","root","","fuelosti_dash");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$vehno = 'MH31B1122';


//$sql = "SELECT Sl_No, Speed, Fuel, Time FROM test where VehNo = '$vehno' desc limit 40";

//$result = $conn->query($sql);

$res=mysqli_query($conn,"SELECT Sl_No,Speed,Fuel,Time FROM test where VehNo='$vehno' limit 40");   
   while($row=mysqli_fetch_array($res))
   {
	    $sensor_data[] = $row;
   }
$readings_time = array_column($sensor_data, 'reading_time');
//while($data = $result->fetch_assoc()){
  //  $sensor_data[] = $data;


$value1 = json_encode(array_reverse(array_column($sensor_data, 'Speed')), JSON_NUMERIC_CHECK);
$value2 = json_encode(array_reverse(array_column($sensor_data, 'Fuel')), JSON_NUMERIC_CHECK);
$reading_time = json_encode(array_reverse($readings_time), JSON_NUMERIC_CHECK);

//$row->free();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Maps </title>
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 21.141, lng: 78.9727 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <style>
    body {
      min-width: 310px;
    	max-width: 1280px;
    	height: 500px;
      margin: 0 auto;
    }
    h2 {
      font-family: Arial;
      font-size: 2.5rem;
      text-align: center;
    }
  </style>
</head>
  <body>
    <h2><?PHP echo $vehno; ?> Status</h2>
      <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAI3c46hhx3EZ9x702h1EWxVwIUR6RI80&callback=initMap&libraries=&v=weekly"
      async
    ></script>

    <div id="chart-speed" class="container"></div>
    <br>
    <br>
    <br>
    <div id="chart-fuel" class="container"></div>

<script>

var Speed = <?php echo $value1; ?>;
var Fuel = <?php echo $value2; ?>;
//var value3 =  echo $value3; 
var reading_time = <?php echo $reading_time; ?>;

var chartT = new Highcharts.Chart({
  chart:{ renderTo : 'chart-speed' },
  title: { text: 'Speed' },
  series: [{
    showInLegend: false,
    data: Speed
  }],
  plotOptions: {
    line: { animation: false,
      dataLabels: { enabled: true }
    },
    series: { color: '#059e8a' }
  },
  xAxis: { 
    type: 'datetime',
    categories: reading_time
  },
  yAxis: {
    title: { text: 'Speed (km/h)' }
    //title: { text: 'Temperature (Fahrenheit)' }
  },
  credits: { enabled: false }
});

var chartH = new Highcharts.Chart({
  chart:{ renderTo:'chart-fuel' },
  title: { text: 'Fuel Level' },
  series: [{
    showInLegend: false,
    data: Fuel
  }],
  plotOptions: {
    line: { animation: false,
      dataLabels: { enabled: true }
    }
  },
  xAxis: {
    type: 'datetime',
    //dateTimeLabelFormats: { second: '%H:%M:%S' },
    categories: reading_time
  },
  yAxis: {
    title: { text: 'Fuel Level (%)' }
  },
  credits: { enabled: false }
});



</script>
</body>
</html>