<!DOCTYPE html>
<html>
<Title>
Donate
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Please fill out the form below: </h2>

<form action="thankyou.php" method="post">
<input type="hidden" name="a" value="INSERT INTO `donor` (`DName`, `DAmount`, `DDate`, `Num`) VALUES ('"><br>
<p>Name:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value="', '">
<p>Amount($):</p>
<input type="text" name="d">
<input type="hidden" name="e" value="', CURRENT_TIMESTAMP, '">
<p>Location Number:</p>
<input type="text" name="f">
<input type="hidden" name="g" value="')">
<input type="hidden" name="h" value="">
<input type="hidden" name="i" value="">
<input type="hidden" name="j" value="">
<input type="hidden" name="k" value="">
<input type="submit">
</form> 
 </body>
<form action="firstpage.html">

<input type="submit" value="Home">
</form>
</html>