<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paranoid Fan</title>
</head>
<body>

<form method="post" action="paranoid_fan.php">
    <b>Enter Entire Google Maps URL: </b></br>
    <input type="text" name="mapsurl"
placeholder="https://www.google.com/maps/place/AT%26T+Stadium/@32.7472799,-97.096704,17z/data=!4m6!1m3!3m2!1s0x864e7d86c8884727:0x6d1e60e88c6a9df8!2sAT%26T+Stadium!3m1!1s0x864e7d86c8884727:0x6d1e60e88c6a9df8"
           size="150"/></br>
    <input type="submit" name="convert" value="Convert" /><br/>
</form>

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

    echo "Latitude:  " . $firstmapsurl . "</br>";
    echo "Longitude: " . $secondmapsurl . "</br>";

    $fixedname = str_replace('+', ' ', $name);
    echo "Name:      " . $fixedname . "</br>";

}

?>


</body>
</html>
