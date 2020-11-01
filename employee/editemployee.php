<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Employee Form</title>
</head>
<style>
.hello{ 
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
<body>
<div class = 'hello'>
<h1> Edit Employee Form </h1>
<form action="updateemployee.php" method="post">
<p>
<label for="ssn">SSN</label>
<select name="ssn" id="ssn">
<?php 
$connection = mysqli_connect("localhost", "root", "", "airport");
$sql = mysqli_query($connection, "SELECT SSN FROM EMPLOYEE1");
while ($row = $sql->fetch_assoc()){
echo '<option value='.$row['SSN'].'>'.$row['SSN'].'</option>';
}
?>
</select>

</p>
	<p>
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname">
    </p>
    <p>
        <label for="m">Middle Name:</label>
        <input type="text" name="m" id="m">
    </p>
<p>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname">
    </p>

<p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>

<p>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
    </p>

    <p>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age">
    </p>

<p>
        <label for="sex">Gender:</label>
   <select name ='sex' id = 'sex'>
<option value = 'M'>Male </option>
<option value = 'F'>Female </option>    
<option value = 'O'>Other </option>
</select>
</p>

<p>
<label for="jobtype">Job Type:</label>
<select name="jobtype" id='jobtype'>
<?php 
$connection = mysqli_connect("localhost", "root", "", "airport");
$sql = mysqli_query($connection, "SELECT JOBTYPE FROM EMPLOYEE2");
while ($row = $sql->fetch_assoc()){
echo '<option value='."\"".$row['JOBTYPE']."\"".'>'.$row['JOBTYPE'].'</option>';
}
?>
</select>

    </p>

<p>
        <label for="astype">AsType:</label>
        <input type="text" name="astype" id="astype">
    </p>


<p>
        <label for="etype">Etype:</label>
        <input type="text" name="etype" id="etype">
    </p>

<p>
        <label for="shift">Shift:</label>
        <input type="text" name="shift" id="shift">
    </p>

<p>
        <label for="position">Position:</label>
        <input type="text" name="position" id="position">
    </p>


<p>
 <label for="apname">AP Name:</label>
<select name="apname">
<?php 
$connection = mysqli_connect("localhost", "root", "", "airport");
$sql = mysqli_query($connection, "SELECT AP_NAME FROM AIRPORT");
while ($row = $sql->fetch_assoc()){
echo '<option value='."\"".$row['AP_NAME']."\"".'>'.$row['AP_NAME'].'</option>';
}
?>
</select>

    </p>


<button class="button" style="vertical-align:middle" type='submit', name='update'><span>Submit </span></button>
    
</form>
</div>
<center><a href='../nav.html'><button class='button' style="vertical-align:middle"><span>Go back home</span></button></a></center>
</body>
</html>
