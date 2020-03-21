<!DOCTYPE html>
<html>
<Title>
Donations by Location
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Find Donations based on Location for 2018</h2>

<?php
echo "<p>What action should be done?</p>";
?>

<form action="staff.php" method="post">
<input type="hidden" name="a" value="SELECT SUM(DAmount) AS 'Donations ($)' FROM donor WHERE Num="><br>
<p>Location:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value=" AND EXTRACT(YEAR FROM DDate)='2018'">
<input type="hidden" name="d" value="">
<input type="submit">
</form> 
 </body>
<form action="firstpage.html">

<input type="submit" value="Home">
</form>
</html>