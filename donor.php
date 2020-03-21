<!DOCTYPE html>
<html>
<Title>
Donors
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Find a Donor</h2>

<?php
echo "<p>What action should be done?</p>";
?>

<form action="staff.php" method="post">
<input type="hidden" name="a" value="Select * FROM donor where DName='"><br>
<p>Donor Name:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value="'">
<input type="hidden" name="d" value="">
<input type="submit">
</form> 
 </body>
<form action="firstpage.html">

<input type="submit" value="Home">
</form>
</html>