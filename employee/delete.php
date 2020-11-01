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

$sql = "DELETE FROM EMPLOYEE1 where SSN = '$ssn'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
header('location: ../nav.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
