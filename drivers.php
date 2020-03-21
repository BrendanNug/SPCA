<!DOCTYPE html>
<html>
<Title>
Find a Driver
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Find a Driver</h2>

<?php
echo "<p>What action should be done?</p>";
?>

<form action="staff.php" method="post">
<input type="hidden" name="a" value="Select employee.ENum, FName, LName, DLicence, EAddress, Phone, EPhone from driver join employee ON driver.ENum = employee.ENum where driver.ENum IN (SELECT ENum FROM rescuer_employee WHERE rescuer_employee.RNum="><br>
<p>Location Number:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value=")">
<input type="hidden" name="d" value="">
<input type="submit">
</form> 
 </body>
<form action="firstpage.html">
 </body>
<form action="firstpage.html">

<input type="submit" value="Home">
</form>
</html>