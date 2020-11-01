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
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$m = mysqli_real_escape_string($link, $_REQUEST['m']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$sex = mysqli_real_escape_string($link, $_REQUEST['sex']);

// Attempt insert query execution
$sql = "INSERT INTO PASSENGER2 (PASSPORTNO,FNAME,M,LNAME,ADDRESS,PHONE,AGE,SEX) VALUES ('$passportno', '$fname', '$m', '$lname', '$address','$phone','$age','$sex')";
$sql2 = "INSERT INTO PASSENGER1 (PASSPORTNO) VALUES ('$passportno')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
header("location: bookflight.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if(mysqli_query($link, $sql2)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
