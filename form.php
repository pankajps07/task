<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Task</title>
		<?php include("assets/css.php") ?>
		<link rel="stylesheet" href="assets/style.css">
	</head>
	<body>
		<div class="container-fluid">
			<h4 class="header">General Info</h4>
	<!-- 	<a href="excel.php">	<span class="signup"><button class="btn btn-info">Signup</button></span></a> -->
			<form action="upload.php" method="post">
				<div class="form-check-inline">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="pricetype" required="">Paid
				</label>
			</div>
			<div class="form-check-inline">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="pricetype" required="">Free
				</label>
			</div>
			<div class="form-check-inline">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="pricetype" required>Sponser
				</label>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="event">Event Title</label>
						<input type="text" class="form-control" name="title"  id="event" required>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label for="organizer">Organizer</label>
						<input type="text" class="form-control" name="organizer" placeholder="The Yaha Events" id="organizer" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="event">Website</label>
						<input type="url" class="form-control" name="website"  id="website" required>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label for="event">Category</label>
						<select class="form-control" name="category" id="category" required>
							<option value="" selected="true" disabled="">Select Category</option>
							<option value="One">Category one</option>
							<option value="Two">Category two</option>
							<option value="Three">Category three</option>
							<option value="Four">Category Four</option>
							<option value="Five">Category five</option>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="descr">Description</label>
				<textarea name="descr" id="descr" cols="30" rows="4" class="form-control" required></textarea>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="event">Location</label>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="latitude" readonly="" value="" class="form-control"  id="latitude">
							</div>
							<div class="col-md-6">
								<input type="text" name="longitude" readonly=""  value="" class="form-control"  id="longitude">
							</div>
						</div>
					
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label for="locationlink">Location Link</label>
						<input type="url" class="form-control" name="link" placeholder="The Yaha Events" id="locationlink" required>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="eventimg">Event Image</label>
						<input type="file" name="file" class="form-control"  id="AddAttendee" multiple required>				
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label for="AddAttendee">Add Attendee</label>
						
						<div class="attend">
								<input type="file" name="file1" class="form-control"  id="AddAttendee" multiple required>
						</div>
						
					</div>
				</div>
			</div>


<label for="Ticket">Event Ticket</label>
			<div class="row event_ticket">
				
				<div class="col-md-4">
					<div class="form-group">
						<select class="form-control" name="ticket_type"  id="ticket_type" required>
							<option value="" selected="true" disabled="" >Ticket Type</option>
							<option value="One">Type one</option>
							<option value="Two">Type two</option>
							<option value="Three">Type three</option>
							<option value="Four">Type Four</option>
							<option value="Five">Type five</option>
						</select>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<input type="number" class="form-control" placeholder="QTY" name="qty" required id="quantity">
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<input type="number" class="form-control" name="price" required placeholder="PRICE" id="price">
					</div>
				</div>
			</div>
			<label for="eventstart">Date and time</label>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="eventstart">Event Start</label>
						<input type="datetime-local" class="form-control" name="start_date"  id="eventstart" 
						min="2021-08-07T00:00" required>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label for="eventend">Event End</label>
						<input type="datetime-local" class="form-control" name="end_date"  id="eventend" min="2021-08-07T00:00" required> 
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="button btn btn-primary">Save Events</button>
			</div>
			</form>
		</div>
		<?php include("assets/js.php") ?>

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
  // x.innerHTML = "Latitude: " + position.coords.latitude + 
  // "<br>Longitude: " + position.coords.longitude;
document.getElementById('latitude').value =position.coords.latitude ;
document.getElementById('longitude').value =position.coords.longitude ;

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


// ----------------------------file upload-----------------------


 
</script>
	</body>
</html>


