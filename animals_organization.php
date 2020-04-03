<!DOCTYPE html>
<html>
<Title>
Animals Rescued
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Animal Rescued in 2018</h2>

<form action="staff.php" method="post">
<input type="hidden" name="a" value="SELECT * FROM animal where RNum="><br>
<p>Location:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value="">
<input type="hidden" name="d" value="">
<input type="submit">
</form> 
 </body>
<form action="index.html">

<input type="submit" value="Home">
</form>
</html>
