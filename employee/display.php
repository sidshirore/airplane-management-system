<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT SSN,FNAME,M,LNAME,ADDRESS,PHONE,AGE,SEX,ASTYPE,ETYPE,SHIFT,POSITION,AP_NAME,SALARY FROM `EMPLOYEE1`,`EMPLOYEE2` where EMPLOYEE1.JOBTYPE=EMPLOYEE2.JOBTYPE
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>SSN</th><th>FNAME</th><th>M</th><th>LNAME</th><th>ADDRESS</th><th>PHONE</th><th>AGE</th><th>SEX</th><th>ASTYPE</th><th>ETYPE</th><th>SHIFT</th><th>POSITION</th><th>AP_NAME</th><th>SALARY</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["SSN"]. "</td><td>" . $row["FNAME"]. "</td><td>" . $row["M"]. "</td><td>" . $row["LNAME"]. "</td><td>" . $row["ADDRESS"]. "</td><td>" . $row["PHONE"]. "</td><td>" . $row["AGE"]. "</td><td>" . $row["SEX"]. "</td><td>" . $row["ASTYPE"]. "</td><td>" . $row["ETYPE"]. "</td><td>" . $row["SHIFT"]. "</td><td>" . $row["POSITION"]. "</td><td>" . $row["AP_NAME"]. "</td><td>" . $row["SALARY"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "<br>";
echo "<center><a href='../nav.html'><button class='button' style='vertical-align:middle'>Go back home</button></a></center>";
$conn->close();
?>
