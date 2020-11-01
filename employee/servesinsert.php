<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "airport");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$ssn = mysqli_real_escape_string($link, $_REQUEST['ssn']);
$passportno = mysqli_real_escape_string($link, $_REQUEST['passportno']);
$sql1 = mysqli_query($link, "SELECT PID FROM PASSENGER1 WHERE PASSPORTNO='$passportno'") or die($link->error);
while($row = $sql1->fetch_assoc()){
$pid = $row['PID'];
}
// Attempt insert query execution
$sql = "INSERT INTO SERVES (SSN, PID, PASSPORTNO) VALUES('$ssn','$pid', '$passportno')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
header('location: ../nav.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
