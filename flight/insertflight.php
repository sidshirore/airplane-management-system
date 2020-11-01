<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "airport");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$flightcode = mysqli_real_escape_string($link, $_REQUEST['flightcode']);
$source = mysqli_real_escape_string($link, $_REQUEST['source']);
$destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
$arrival = mysqli_real_escape_string($link, $_REQUEST['arrival']);
$departure = mysqli_real_escape_string($link, $_REQUEST['departure']);
$duration = mysqli_real_escape_string($link, $_REQUEST['duration']);
$airlineid = mysqli_real_escape_string($link, $_REQUEST['airlineid']);

 
// Attempt insert query execution
$sql = "INSERT INTO FLIGHT (FLIGHT_CODE,SOURCE,DESTINATION,ARRIVAL,DEPARTURE,STATUS,DURATION,FLIGHTTYPE,LAYOVER_TIME,NO_OF_STOPS,AIRLINEID) VALUES ('$flightcode', '$source', '$destination', '$arrival', '$departure','On-Time','$duration','Non-stop','0','0','$airlineid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
header('location: ../nav.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
