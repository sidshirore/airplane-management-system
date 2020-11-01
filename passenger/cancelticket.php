<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Passenger Cancel Flight Booking</title>
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
<h1>Passenger Cancel Flight Booking </h1>
<form action="insertcancel.php" method="post">

<p>
        <label for="ticketno">Ticket Number</label>
     <input type="text" id="ticketno" name="ticketno">
    </p>

<button class="button" style="vertical-align:middle" type='submit'><span>Cancel My Flight!!!! </span></button>
<a href='../passengernav.html'><button class='button' style="vertical-align:middle">Go back home</button></a>
</form>
</div>
</body>
</html>
