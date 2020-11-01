<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT FLIGHT_CODE,SOURCE,DESTINATION,ARRIVAL,DEPARTURE,STATUS,DURATION,FLIGHTTYPE,LAYOVER_TIME,NO_OF_STOPS,AIRLINEID FROM `FLIGHT`,`AIRLINE` WHERE `FLIGHT`.`AIRLINEID`=`AIRLINE`.`AIRLINEID` ";
$sql = "SELECT * FROM `FLIGHT`,`AIRLINE` WHERE `FLIGHT`.`AIRLINEID`=`AIRLINE`.`AIRLINEID` ";
$result = $conn->query($sql);

if ($result && $result->num_rows) {
    echo "<table><tr><th>FLIGHT_CODE</th><th>SOURCE</th><th>DESTINATION</th><th>ARRIVAL</th><th>DEPARTURE</th><th>STATUS</th><th>DURATION</th><th>FLIGHTTYPE</th><th>LAYOVER_TIME</th><th>NO_OF_STOPS</th><th>AIRLINEID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FLIGHT_CODE"]. "</td><td>" . $row["SOURCE"]. "</td><td>" . $row["DESTINATION"]. "</td><td>" . $row["ARRIVAL"]. "</td><td>" . $row["DEPARTURE"]. "</td><td>" . $row["STATUS"]. "</td><td>" . $row["DURATION"]. "</td><td>" . $row["FLIGHTTYPE"]. "</td><td>" . $row["LAYOVER_TIME"]. "</td><td>" . $row["NO_OF_STOPS"]. "</td><td>" . $row["AIRLINEID"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<button onClick="window.print()">Print this page</button>
<a href='../nav.html'><button class='button' style="vertical-align:middle"><span>Go back home</span></button></a>
