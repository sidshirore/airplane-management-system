<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Delete Employee Form</title>
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
<div class ='hello'>
<h1> Delete Employee Record </h1>
<form action="delete.php" method="post">
<p>
<label for='ssn'> SSN </label>
<select name="ssn">
<?php 
$connection = mysqli_connect("localhost", "root", "", "airport");
$sql = mysqli_query($connection, "SELECT SSN FROM EMPLOYEE1");
while ($row = $sql->fetch_assoc()){
echo '<option value='.$row['SSN'].'>'.$row['SSN'].'</option>';
}
?>
</select>
<br> <br>
<button class="button" style="vertical-align:middle" type='submit', name='update'><span>Delete </span></button>
</form>
</div>
<center><a href='../nav.html'><button class='button' style="vertical-align:middle"><span>Go back home</span></button></a></center>
</body>
</html>
