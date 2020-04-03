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
echo "<h3>Please enter a location ID</h3>";
?>

<form action="staff.php" method="post">
<input type="hidden" name="a" value="SELECT SUM(DAmount) AS 'Donations ($)' FROM donor WHERE Num="><br>
<p>ID:</p>
<input type="text" name="b"><br>
<input type="hidden" name="c" value=" AND EXTRACT(YEAR FROM DDate)='2018'">
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
    $rows = $dbh->query("SELECT BNum, BName FROM spca_branch");
    if($rows){
        $row = $rows->fetchAll();
        $columnsNames = array_keys($row[0]);
        echo "<thead>";
        echo "<tr>";
        $a = 0;
        $b = 0;
        echo "<td>ID</td><td>SPCA Branch Name</td>";
        echo "</tr>";
        echo "</thead>";
        foreach($row as $vals) {
            echo "<tbody>";
            echo "<tr>";
            

                echo "<td>".$vals['BNum']."</td><td>".$vals['BName']."</td>";	
                echo "</tr>";
            
                echo "</tbody>";
            }
        $dbh = null;
    }
    else{
        echo "<h3>Sorry, SPCA info could not be found!</h3>";
    }
    $dbh = new PDO('mysql:host=localhost;dbname=spca_db', "root", "");
    $rows = $dbh->query("SELECT SNum, SName FROM shelter");
    if($rows){
        $row = $rows->fetchAll();
        $columnsNames = array_keys($row[0]);
        echo "<thead>";
        echo "<tr>";
        $a = 0;
        $b = 0;
        echo "<td>ID</td><td>Shelter Name</td>";
        echo "</tr>";
        echo "</thead>";
        foreach($row as $vals) {
            echo "<tbody>";
            echo "<tr>";
            

                echo "<td>".$vals['SNum']."</td><td>".$vals['SName']."</td>";	
                echo "</tr>";
            
                echo "</tbody>";
            }
        $dbh = null;
    }
    else{
        echo "<h3>Sorry, shelter info could not be found!</h3>";
    }
    $dbh = new PDO('mysql:host=localhost;dbname=spca_db', "root", "");
    $rows = $dbh->query("SELECT RNum, RName FROM rescuer");
    if($rows){
        $row = $rows->fetchAll();
        $columnsNames = array_keys($row[0]);
        echo "<thead>";
        echo "<tr>";
        $a = 0;
        $b = 0;
        echo "<td>ID</td><td>Rescue Organization Name</td>";
        echo "</tr>";
        echo "</thead>";
        foreach($row as $vals) {
            echo "<tbody>";
            echo "<tr>";
            

                echo "<td>".$vals['RNum']."</td><td>".$vals['RName']."</td>";	
                echo "</tr>";
            
                echo "</tbody>";
            }
        $dbh = null;
    }
    else{
        echo "<h3>Sorry, rescuer info could not be found!</h3>";
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
