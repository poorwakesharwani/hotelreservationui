<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Hotel Reservation</h1> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12">
	   <div class="row">
	   	<div class="col-sm-3">
	   <h4> Mobile Number</h4>
	   </div>
	   <div class="col-sm-3">

	      <input type="number" id="mob" style="border-color: green">
	   </div>
	   </div><br>
	 <div class="row">
	   	<div class="col-sm-3">
	   <h4> Password</h4>
	   </div>
	   <div class="col-sm-3">

	      <input type="Password" id="pass" style="border-color: green">
	   </div>
	   </div><br>  
	   <div class="row">
	     <div class="col-sm-3">
	      </div>
	   <div class="col-sm-3">
	       <button type="button" class="btn btn-success">Login</button>
	   </div>
	   <div class="col-sm-2">
	   </div>
	   <div class="col-sm-3">
	       <button type="button" class="btn btn-primary" onclick="location.href='http://localhost/hotel_reservation/reservation_registration.php';">Registration</button>
        </div>
		</div>
              
  </div>
</div>
</div>

<script>
    function save_detail(){
		 pass=document.getElementById("pass").value;
		 mobile=document.getElementById("mob").value;

		 
	}
</body>
</html>
  