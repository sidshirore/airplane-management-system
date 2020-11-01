<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Passenger Info form</title>
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
<h1> Passenger Info Form </h1>
<form action="insertpassenger.php" method="post">

<p>
        <label for="passportno">Passport Number:</label>
        <input type="text" name="passportno" id="passportno">
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



<button class="button" style="vertical-align:middle" type='submit'><span>Next </span></button>
</form>
</div>
</body>
</html>
