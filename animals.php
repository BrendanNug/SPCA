<!DOCTYPE html>
<html>
<Title>
SPCA Animals
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
            <li><a href="index.html">Home</a></li>
        </ul>
    </nav>
    
    <div id="side-menu" class="side-nav">
        <a href="#" class="menu-close" onclick="closeSideMenu()">&times;</a>
        <a href="index.html">Home</a>
        <a href="login.html">Staff Login</a>

    </div>

	
<table class="spcaTable">

<div id="main" class="main-message">
		<h1>Our Animals</h1>

	</div>

<?php
    set_error_handler(function($errno, $errstr, $errfile, $errline, $errcontext) {
        if (0 === error_reporting()) {
            return false;
        }
        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
    });

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=spca_db', "root", "");
        $rows = $dbh->query("SELECT * FROM animal");
        if($rows){
            $row = $rows->fetchAll();
            $columnsNames = array_keys($row[0]);
            echo "<thead>";
            echo "<tr>";
            $a = 0;
            $b = 0;
            echo "<td>Animal ID</td><td>Name</td><td>Type</td><td>Location ID</td>";
            echo "</tr>";
            echo "</thead>";
            foreach($row as $vals) {
                echo "<tbody>";
                echo "<tr>";
                

                    echo "<td>".$vals['AID']."</td><td>".$vals['AName']."</td><td>".$vals['AType']."</td><td>".$vals['ALocation']."</td>";	
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
</html>



