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
$sql = "UPDATE FLIGHT SET SOURCE ='$source', DESTINATION='$destination',ARRIVAL='$arrival',DEPARTURE='$departure',DURATION='$duration',AIRLINEID='$airlineid' WHERE FLIGHT_CODE='$flightcode'";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location: ../nav.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
