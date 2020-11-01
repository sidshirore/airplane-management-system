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
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$m = mysqli_real_escape_string($link, $_REQUEST['m']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$sex = mysqli_real_escape_string($link, $_REQUEST['sex']);
$jobtype = mysqli_real_escape_string($link, $_REQUEST['jobtype']);
$astype = mysqli_real_escape_string($link, $_REQUEST['astype']);
$etype = mysqli_real_escape_string($link, $_REQUEST['etype']);
$shift = mysqli_real_escape_string($link, $_REQUEST['shift']);
$position = mysqli_real_escape_string($link, $_REQUEST['position']);
$apname = mysqli_real_escape_string($link, $_REQUEST['apname']);
 
// Attempt insert query execution
$sql = "UPDATE EMPLOYEE1 SET FNAME = '$fname', M ='$m', LNAME='$lname', ADDRESS='$address',PHONE='$phone',AGE='$age',SEX='$sex',JOBTYPE='$jobtype',ASTYPE='$astype' WHERE SSN='$ssn'";

if(isset($_POST['update'])){
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
header('location: ../nav.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>
