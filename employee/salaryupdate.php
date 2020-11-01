<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "airport");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$jobtype = mysqli_real_escape_string($link, $_REQUEST['jobtype']);
$salary = mysqli_real_escape_string($link, $_REQUEST['salary']);
 
// Attempt insert query execution
$sql = "UPDATE EMPLOYEE2 SET SALARY='$salary' WHERE JOBTYPE = '$jobtype'";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
header('location: ../nav.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
