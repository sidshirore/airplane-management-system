<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "airport");



// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$passportno = mysqli_real_escape_string($link, $_REQUEST['passportno']);
$source = mysqli_real_escape_string($link, $_REQUEST['source']);
$destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
$dateofbooking = mysqli_real_escape_string($link, $_REQUEST['dateofbooking']);
$dateoftravel = mysqli_real_escape_string($link, $_REQUEST['dateoftravel']);
$class = mysqli_real_escape_string($link, $_REQUEST['class']);
$ticketno= mysqli_real_escape_string($link,rand());

$sql1 = "SELECT FLIGHT_CODE FROM FLIGHT WHERE SOURCE='$source' and DESTINATION='$destination'";
$result = mysqli_query($link, $sql1);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$flight_code = $row['FLIGHT_CODE'];

$sql2 = "SELECT PID FROM PASSENGER1 WHERE PASSPORTNO='$passportno'";
$result2 = mysqli_query($link, $sql2);
$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$pid = $row2['PID'];

if($class == 'ECONOMY'){
	$price = 25000;}
if($class == 'FIRSTCLASS'){
	$price = 50000;}
if($class == 'BUSINESS'){
	$price = 75000;}


// Attempt insert query execution
$sql3 = "INSERT INTO TICKET1 (TICKET_NUMBER,SOURCE,DESTINATION,DATE_OF_BOOKING,DATE_OF_TRAVEL,CLASS,PID,PASSPORTNO) VALUES ('$ticketno', '$source', '$destination', '$dateofbooking', '$dateoftravel','$class','$pid','$passportno')";
$sql4 = "INSERT INTO TICKET2 (DATE_OF_BOOKING,SOURCE,DESTINATION,CLASS,PRICE) VALUES ('$dateofbooking','$source','$destination','$class','$price')";

$sql5 = "INSERT INTO PASSENGER3 (PID,FLIGHT_CODE) VALUES ('$pid','$flight_code')";


if(mysqli_query($link, $sql3)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link);
}

if(mysqli_query($link, $sql4)){
    echo "Your ticket number is: '$ticketno'.";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}


if(mysqli_query($link, $sql5)){
    echo "Please note it down.";
} else{
    echo "ERROR: Could not able to execute $sql5. " . mysqli_error($link);
}

echo "<a href='../passengernav.html'><button>Go back home</button></a>";
// Close connection
mysqli_close($link);
?>
