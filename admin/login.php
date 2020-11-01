<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "airport");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "SELECT * FROM LOGIN WHERE USERNAME='$username' and PASSWORD='$password'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count == 1){
	echo "Login successful";
	header("location: ../nav.html");
}
else{
	echo "Wrong Login";
}
 
// Close connection
mysqli_close($link);
?>
