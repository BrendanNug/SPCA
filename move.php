<!DOCTYPE html>
<html>
<Title>
Move an Animal
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Move an Animal</h2>

<?php
echo "<p>What action should be done?</p>";
?>
<form action="complete.php" method="post">
    <input type="hidden" name="a" value="UPDATE animal SET ALocation= ">
    <p>Animal ID:</p>
    <input type="text" name="d"><br>
    <p>New Location:</p>
    <input type="text" name="b"><br>
    <input type="hidden" name="c" value="  WHERE AID= ">
    <p>Move Animal</p>
    <input type="submit">
</form> 
 </body>
<form action="firstpage.html">

<input type="submit" value="Home">
</form>
</html>