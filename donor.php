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
echo "<p>Please enter a donor name</p>";
?>

<form action="staff.php" method="post">
<input type="hidden" name="a" value="Select * FROM donor where DName='"><br>
<p>Donor Name:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value="'">
<input type="hidden" name="d" value="">
<input type="submit">
</form> 
<table class="spcaTable">
<?php
set_error_handler(function($errno, $errstr, $errfile, $errline, $errcontext) {
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

try {

    $dbh = new PDO('mysql:host=localhost;dbname=spca_db', "root", "");
    $rows = $dbh->query("SELECT Distinct DName FROM donor");
    if($rows){
        $row = $rows->fetchAll();
        $columnsNames = array_keys($row[0]);
        echo "<thead>";
        echo "<tr>";
        $a = 0;
        $b = 0;
        echo "<td>Name</td>";
        echo "</tr>";
        echo "</thead>";
        foreach($row as $vals) {
            echo "<tbody>";
            echo "<tr>";
            

                echo "<td>".$vals['DName']."</td>";	
                echo "</tr>";
            
                echo "</tbody>";
            }
        $dbh = null;
    }
    else{
        echo "<h3>Sorry, the info your looking for could not be found!</h3>";
    }
}
catch(\Exception $e) {
echo "<h3>Sorry, the info your looking for could not be found!</h3>";
    }

?>
</table>
</body>
<form action="index.html">

<input type="submit" value="Home">
</form>
</html>
