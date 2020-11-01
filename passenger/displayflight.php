<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
.hello{ 
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
</head>
<body>
<div class='hello'>
<form action="" method="GET">

<p>
        <label for="ticketno">Ticket Number</label>
     <input type="text" id="ticketno" name="ticketno">
    </p>
<button class="button" style="vertical-align:middle" type='submit'><span>View My Flight </span></button>
</form>

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

if(isset($_GET['ticketno'])){
$ticketno = $_GET['ticketno'];
$sql1 = "SELECT * FROM `TICKET1` where TICKET_NUMBER='$ticketno'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$source = $row1['SOURCE'];
$destination = $row1['DESTINATION'];
$dateoftravel = $row1['DATE_OF_TRAVEL'];
$class = $row1['CLASS'];
$passportno = $row1['PASSPORTNO'];

$sql2 = "SELECT * FROM `PASSENGER2` where PASSPORTNO='$passportno'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$fname = $row2['FNAME'];
$m = $row2['M'];
$lname = $row2['LNAME'];

$sql3 = "SELECT * FROM `PASSENGER1` where PASSPORTNO='$passportno'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
$pid = $row3['PID'];

$sql4 = "SELECT * FROM `PASSENGER3` where PID='$pid'";
$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);
$flightcode = $row4['FLIGHT_CODE'];

$sql5 = "SELECT * FROM `FLIGHT` where FLIGHT_CODE='$flightcode'";
$result5 = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_array($result5, MYSQLI_ASSOC);
$arrival = $row5['ARRIVAL'];
$departure = $row5['DEPARTURE'];
$arrival = $row5['ARRIVAL'];
$duration = $row5['DURATION'];
$airlineid = $row5['AIRLINEID'];

$sql6 = "SELECT * FROM `AIRLINE` where AIRLINEID='$airlineid'";
$result6 = mysqli_query($conn, $sql6);
$row6 = mysqli_fetch_array($result6, MYSQLI_ASSOC);
$airline = $row6['AL_NAME'];

echo "<br>";
echo "Ticket Number: $ticketno";
echo "<br>";
echo "First Name : $fname";
echo "<br>";
echo "Middle  Name : $m";
echo "<br>";
echo "Last Name : $lname";
echo "<br>";
echo "Source : $source";
echo "<br>";
echo "Destination : $destination";
echo "<br>";
echo "Date of Travel : $dateoftravel";
echo "<br>";
echo "Class : $class";
echo "<br>";
echo "Flight Code : $flightcode";
echo "<br>";
echo "Arrival : $arrival";
echo "<br>";
echo "Departure : $departure";
echo "<br>";
echo "Duration : $duration";
echo "<br>";
echo "Airline : $airline";


}
$conn->close();
?>

<br><br>
<button class='button' style="vertical-align:middle" onClick="window.print()"><span>Print your ticket</span></button>
<a href='../passengernav.html'><button class='button' style="vertical-align:middle">Go back home</button></a>
</div>
