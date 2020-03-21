<!DOCTYPE html>
<html>
<Title>
Animals by Location
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Find Animals based on Location</h2>

<?php
echo "<p>What action should be done?</p>";
?>

<form action="staff.php" method="post">
<input type="hidden" name="a" value="Select * from animal where ALocation="><br>
<p>Location Number:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value="">
<input type="hidden" name="d" value="">
<input type="submit">
</form> 
 </body>
<form action="firstpage.html">

<input type="submit" value="Home">
</form>
</html>