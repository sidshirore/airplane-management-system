<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Passenger Flight Booking</title>
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
<h1>Passenger Flight Booking </h1>
<form action="insertflight.php" method="post">

<p>
 <label for="source">Source:</label>
  <select name="source" id="source">
    <option value="BOM">BOM</option>
    <option value="JFK">JFK</option>
    <option value="IAH">IAH</option>
  </select>
    </p>
    
	<p>
<label for="destination">Destination:</label>
  <select name="destination" id="destination">
    <option value="IXC">IXC</option>
    <option value="SFO">SFO</option>
    <option value="FRA">FRA</option>
  </select>

    </p>
    
    <p>
        <label for="dateofbooking">Date of Booking:</label>
     <input type="date" id="dateofbooking" name="dateofbooking">
 
    </p>

<p>
        <label for="dateoftravel">Date of Travel:</label>
     <input type="date" id="dateoftravel" name="dateoftravel">
 
    </p>

<p>
        <label for="class">Class:</label>
   <select name ='class' id = 'class'>
<option value = 'ECONOMY'>Economy </option>
<option value = 'BUSINESS'>Business </option>    
<option value = 'FIRSTCLASS'>First Class </option>
</select>
</p>

<p>
        <label for="passportno">Confirm Passport Number:</label>
        <input type="text" name="passportno" id="passportno">
    </p>

 
<button class="button" style="vertical-align:middle" type='submit'><span>Submit </span></button>
</form>
</div>
</body>
</html>
