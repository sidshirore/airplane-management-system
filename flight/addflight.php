<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Flight Form</title>
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
<div class='hello'>
<h1> Add Flight Form </h1>
<form action="insertflight.php" method="post">
<p>
        <label for="flightcode">Flight Code:</label>
        <input type="text" name="flightcode" id="flightcode">
    </p>
    
	<p>
        <label for="source">Source</label>

 <select name="source" id="source">
    <option value="IAH">IAH</option>
    <option value="SFO">SFO</option>
    <option value="BOM">BOM</option>
    <option value="FRA">FRA </option>
<option value="JFK">JFK</option>
    <option value="IAX">IAX</option>
    <option value="DEL">DEL</option>
  </select>

    </p>

<p>
        <label for="destination">Destination</label>

 <select name="destination" id="destination">
    <option value="IXC">IXC</option>
    <option value="SFO">SFO</option>
    <option value="BOM">BOM</option>
    <option value="FRA">FRA</option>
<option value="JFK">JFK</option>
    <option value="IAX">IAX</option>
    <option value="DEL">DEL</option>
  </select>

    </p>

    <p>
        <label for="arrival">Arrival</label>
        <input type="text" name="arrival" id="arrival">
    </p>
<p>
        <label for="departure">Departure</label>
        <input type="text" name="departure" id="departure">
    </p>

<p>
        <label for="duration">Duration</label>
        <input type="text" name="duration" id="duration">
    </p>

<p>
        <label for="airlineid">Airline ID</label>
<select name="airlineid">
<?php 
$connection = mysqli_connect("localhost", "root", "", "airport");
$sql = mysqli_query($connection, "SELECT AIRLINEID FROM AIRLINE");
while ($row = $sql->fetch_assoc()){
echo '<option value='."\"".$row['AIRLINEID']."\"".'>'.$row['AIRLINEID'].'</option>';
}
?>
</select>

    </p>

    
<button class="button" style="vertical-align:middle" type='submit'><span>Submit </span></button>
</form>
</div>
<center><a href='../nav.html'><button class='button' style="vertical-align:middle"><span>Go back home</span></button></a></center>
</body>
</html>
