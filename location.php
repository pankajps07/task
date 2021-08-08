<!DOCTYPE html>
<html>
<body>

<form method="POST">
<button onclick="getLocation()" name="submit_coordinates">Locate US</button>
<input type="text" hidden="" name="latitude" id="lat" value=""> <br> <br>
<input type="text" hidden="" name="longitude" id="long" value="">
<p id="demo"></p>
</form>

<script>
var x = document.getElementById("demo");

 window.onload=function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;


var lat=position.coords.latitude;
var long=position.coords.longitude

document.getElementById('lat').value =position.coords.latitude ;
document.getElementById('long').value =position.coords.longitude ;




}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}




</script>
</body>
</html>

<?php
    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>