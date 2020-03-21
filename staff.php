<!DOCTYPE html>
<html>
<Title>
SPCA Staff
</Title>
<head>
<link href="basic.css" type="text/css" rel="stylesheet" >
</head>
<body>


<nav class="navbar">
        <span class="open-slide">
            <a href="#" onclick="openSideMenu()">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                    <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                    <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                </svg>
            </a>
        </span>
        <ul class="navbar-nav">
            <li><a href="donor.php">Donate Today</a></li>
        </ul>
    </nav>
    
    <div id="side-menu" class="side-nav">
        <a href="#" class="menu-close" onclick="closeSideMenu()">&times;</a>
        <a href="firstpage.html">Home</a>
        <form id="animals" action="myfirstPHP.php" method="POST">
          <input type="hidden" name="a" value="*">
          <input type="hidden" name="b" value="animals">
          <a href="#" onclick="document.getElementById('animals').submit();">
            View Our Animals</a>
        </form>
        <a href="login.html">Staff Login</a>

    </div>


<div id="main" class="main-message">
<h1>Staff Portal</h1>
<table class="spcaTable">

<?php
 $valA = $_POST["a"];                      
 $valB = $_POST["b"];
 $valC = $_POST["c"];
 $valD = $_POST["d"];
echo "<h3>Hello</h3>";
echo "<p>What action should be done?</p>";

$dbh = new PDO('mysql:host=localhost;dbname=spca_db', "root", "");
$rows = $dbh->query("$valA$valB$valC$valD");
$row = $rows->fetchAll();
$columnsNames = array_keys($row[0]);
echo "<thead>";
echo "<tr>";
$a = 0;
while($a < sizeof($columnsNames)){
	echo "<td>".$columnsNames[$a]."</td>";
	$a = $a + 2;
}
echo "</tr>";
echo "</thead>";
foreach($row as $vals) {
echo "<tbody>";
echo "<tr>";

$a = 0;
while($a < sizeof($vals)/2){
	echo "<td>".$vals[$a]."</td>";	
	$a=$a+1;
	}
	echo "</tr>";

	echo "</tbody>";
}
    $dbh = null;

?>
<form action="move.php">
	<input type="submit" value="Move Animal">
</form>
<form action="find_animals.php">
	<input type="submit" value="Find animals at a Location">
</form>
<form action="drivers.php">
	<input type="submit" value="Find organization drivers">
</form>
<form action="donor.php">
	<input type="submit" value="Find a Donor">
</form>
<form action="donations.php">
	<input type="submit" value="Find Organization donations">
</form>
<form action="animals_organization.php">
	<input type="submit" value="Animals recused by an organization">
</form>

</table>
</div>

<form action="staff.php" method="post">
	<input type="hidden" name="a" value="SELECT * FROM animal">
	<input type="hidden" name="b" value="">
	<input type="hidden" name="c" value="">
	<input type="hidden" name="d" value="">
	<input type="submit" value="View All Animals">
</form>

<form action="staff.php" method="post">
    <input type="hidden" name="a" value="SELECT * FROM animal WHERE RNum IS NULL AND ALocation IN (SELECT SNum FROM shelter)">
	<input type="hidden" name="b" value="">
	<input type="hidden" name="c" value="">
	<input type="hidden" name="d" value="">
	<input type="submit" value="Animals who went from SPCA directly to shelter">
</form>
<form action="staff.php" method="post">
    <input type="hidden" name="a" value="SELECT * FROM donor">
	<input type="hidden" name="b" value="">
	<input type="hidden" name="c" value="">
	<input type="hidden" name="d" value="">
	<input type="submit" value="View Donors">
</form>


<script>
        function openSideMenu(){
            document.getElementById('side-menu').style.width = '250px';
            document.getElementById('main').style.marginLeft = '250px';
        }
        function closeSideMenu(){
            document.getElementById('side-menu').style.width = '0';
            document.getElementById('main').style.marginLeft = '0';
        }
    </script>


</body>

<form action="firstpage.html">
	<input type="submit" value="Home">
</form>


</html>
