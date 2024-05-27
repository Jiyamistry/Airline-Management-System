<?php
	session_start();
	include "header_c.php";

?>
<html>
	<head>
		<title>
			View Available Flights
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<form action="view_flights_form_handler.php" method="post">
			<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Origin</td>
					<td class="fix_table">Enter the Destination</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="AndhraPradesh">
  						  	<option value="ArunachalPradesh">
  						  	<option value="Assam">
  						  	<option value="Ahmedabad">
  						  	<option value="Bihar">
  						  	<option value="Chhattisgarh">
  						  	<option value="Goa">
  						  	<option value="Haryana">
  						  	<option value="HimachalPradesh">
  						  	<option value="Jharkhand">
  						  	<option value="Karnataka">
  						  	<option value="Kerala">
  						  	<option value="MadhyaPradesh">
  						  	<option value="Meghalaya">
  						  	<option value="Mizoram">
  						  	<option value="Mumbai">
  						  	<option value="Nagaland">
  						  	<option value="Odisha">
  						  	<option value="Punjab">
  						  	<option value="Rajasthan">
  						  	<option value="Sikkim">
  						  	<option value="TamilNadu">
  						  	<option value="Telangana">
  						  	<option value="Tripura">
  						  	<option value="UttarPradesh">
  						  	<option value="Uttarakhand">
  						  	<option value="WestBengal">

  						</datalist>
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<<option value="AndhraPradesh">
  						  	<option value="ArunachalPradesh">
  						  	<option value="Assam">
  						  	<option value="Ahmedabad">
  						  	<option value="Bihar">
  						  	<option value="Chhattisgarh">
  						  	<option value="Goa">
  						  	<option value="Haryana">
  						  	<option value="HimachalPradesh">
  						  	<option value="Jharkhand">
  						  	<option value="Karnataka">
  						  	<option value="Kerala">
  						  	<option value="MadhyaPradesh">
  						  	<option value="Meghalaya">
  						  	<option value="Mizoram">
  						  	<option value="Mumbai">
  						  	<option value="Nagaland">
  						  	<option value="Odisha">
  						  	<option value="Punjab">
  						  	<option value="Rajasthan">
  						  	<option value="Sikkim">
  						  	<option value="TamilNadu">
  						  	<option value="Telangana">
  						  	<option value="Tripura">
  						  	<option value="UttarPradesh">
  						  	<option value="Uttarakhand">
  						  	<option value="WestBengal">
  						</datalist>
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Departure Date</td>
					<td class="fix_table">Enter the No. of Passengers</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Class</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economy</option>
  							<option value="business">Business</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Search for Available Flights" name="Search">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>