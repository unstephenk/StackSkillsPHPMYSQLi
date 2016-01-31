<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/28/2016
 * Time: 2:32 PM
 */

/*The @ symbol location*/
$atsymbol;

/*The first comma location*/
$firstcomma = 0;

/*The next comma location*/
$secondcomma;

/*Collects the Latitude*/
$latitude = "";

/*Collects the Longitude*/
$longitude = "";

if(isset($_POST['convert'])) {

	$mapsurl = $_POST['mapsurl'];

	/*First place the string in an array*/
	$mapsurlchar = str_split($mapsurl);


	/*Reads out the array*/
	$i = 0;
	$slashes = 0;
	foreach ($mapsurlchar as $char) {

		if ($char == "@") {
			$atsymbol = $i;
		}
		if ($char == "," && $firstcomma == 0) {
			$firstcomma = $i;
		}
		if ($char == "," && $firstcomma != 0) {
			$secondcomma = $i;
		}
		if ($char == "/" && $slashes == 4){
			$firstslash = $i;
		}
		if ($char == "/" && $slashes == 5){
			$secondslash = $i;
		}
		if ($char == "/"){
			$slashes++;
		}
		$i++;
	}

	$distanceLatitude = $firstcomma - $atsymbol;
	$distanceLongitude = $secondcomma - $firstcomma;

	$firstmapsurl = substr($mapsurl, ($atsymbol + 1), ($distanceLatitude - 1));
	$secondmapsurl = substr($mapsurl, ($firstcomma + 1), ($distanceLongitude - 1));

	$distanceName = $secondslash - $firstslash;

	$name = substr($mapsurl, ($firstslash + 1), ($distanceName - 1));

	$rmplusname = str_replace('+', ' ', $name);
	$fixedname = str_replace('%26', '&', $rmplusname);

/*	$fixedname shows the name of the location
	$firstmapsurl shows the  Latitude
	$secondmapsurl shows the Longitude*/

}

?>

<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$("input[name='send']").click(function() {
                                                $(".status").html("");
                                                $(".pin").html("");
						$(".message").html("");

					$(".require").each(function(){
						if($(this).val() == ""){
							alert("Please input require value");
							$(this).focus();
							return;
						}
					});
					var userid = $("#userid").val();
					var title = $("#title").val();
					var pin = $("#pin").val();
					var detail = $("#detail").val();
					var longitude = $("#longitude").val();
					var latitude = $("#latitude").val();
					$.post(
					"parse.php",
					{
						userid : userid,
						title : title,
						pin : pin,
						detail : detail,
						longitude : longitude,
						latitude : latitude
					},
					function(response){
						$(".pin").html(pin);
						$(".status").html(response.status);
						$(".message").html(response.message);
					},
						"json"
					);
				});
			});
		</script>
	</head>

	<body>
	<h2>Developer Note: </h2>
	<h4><i>For this project, I coded a portion of the form that allows users enter a Google Maps
			URL. The PHP script will parse the string and remove the title and the coordinates for the
			Latitude and Longitude and place them in the appropriate field. A portion of the code has
			been removed to protect the interest of Paranoid Fan.</i></h4><hr><br/>

	<form method="post" action="index.php">
		<b>Enter Entire Google Maps URL: </b></br>
		<input type="text" name="mapsurl"
			   placeholder="https://www.google.com/maps/place/AT%26T+Stadium/@32.7472799,-97.096704,17z/data=!4m6!1m3!3m2!1s0x864e7d86c8884727:0x6d1e60e88c6a9df8!2sAT%26T+Stadium!3m1!1s0x864e7d86c8884727:0x6d1e60e88c6a9df8"
			   size="150"/></br>
		<input type="submit" name="convert" value="Convert" /><br/>
	</form>


		<form name="frm1">
			<table border="1" width="600px">
				<tr>
					<td>User ID</td>
					<td><input class="require" type="text" id="userid" name="userid" value="1744"></td>
				</tr>
				<tr>
					<td>Title</td>
					<td><input class="require" type="text" id="title" name="title" placeholder="Tailgate" value="<?php echo $fixedname ?>"></td>
				</tr>
				<tr>
					<td>Pin</td>
					<td><select class="require" id="pin" name="pin">
							<option value="Apparel" selected>Apparel</option>
							<option value="ATM">ATM</option>
							<option value="Beer">Beer</option>
							<option value="Broadcast">Broadcast</option>
							<option value="Celebrity">Celebrity</option>
							<option value="Entry Exit">Entry Exit</option>
							<option value="Food & Drinks">Food & Drinks</option>
							<option value="Game Showing">Game Showing</option>
							<option value="Medical Care">Medical Care</option>
							<option value="Music">Music</option>
							<option value="Note">Note</option>
							<option value="Parking">Parking</option>
							<option value="Parking Available">Parking Available</option>
							<option value="Parking Full">Parking Full</option>
							<option value="Partying">Partying</option>
							<option value="Playing">Playing</option>
							<option value="Police">Police</option>
							<option value="Post Game">Post Game</option>
							<option value="Restroom">Restroom</option>
							<option value="Rickshaw">Rickshaw</option>
							<option value="Tailgate">Tailgate</option>
							<option value="Taxi">Taxi</option>
							<option value="Ticket">Ticket</option>
							<option value="Treasure">Treasure</option>
							<option value="Uber">Uber</option>
							<option value="Watch Party">Watch Party</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Detail</td>
					<td><input class="require" type="text" id="detail" name="detail" placeholder="Tailgate"></td>
				</tr>
				<tr>
					<!--TODO: This is a temp fix. The values for Longitude and Latitude need to be fixed.-->
					<td>Latitude</td>
					<td><input class="require" type="text" id="longitude" name="longitude" placeholder="32.234234" value="<?php echo $firstmapsurl ?>"></td>
				</tr>
				<tr>
					<td>Longitude</td>
					<td><input class="require" type="text" id="latitude" name="latitude" placeholder="125.323544" value="<?php echo $secondmapsurl ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="send" value="Send Request"></td>
				</tr>
			</table>
		</form>
		<div style="margin-top : 30px;">
			<span style="width : 200px;">pin : </span ><span class="pin"></span ></br>
			<span style="width : 200px;">status : </span ><span class="status"></span ></br>
			<span style="width : 200px;">message : </span ><span class="message"></span ></br>
		</div>
	</body>
</html>
		