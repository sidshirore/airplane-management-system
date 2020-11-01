<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "airport");



// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$ticketno = mysqli_real_escape_string($link, $_REQUEST['ticketno']);
$dateofcancellation=date('Y-m-d');
$surcharge=15000;

// Attempt insert query execution
$sql = "INSERT INTO TICKET3 (DATE_OF_CANCELLATION,SURCHARGE) VALUES ('$dateofcancellation', '$surcharge')";
$sql2 = "UPDATE TICKET1 SET DATE_OF_CANCELLATION  = ('$dateofcancellation') WHERE TICKET_NUMBER='$ticketno'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if(mysqli_query($link, $sql2)){
    echo "Records added successfully.";
header('location: ../passengernav.html');
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
