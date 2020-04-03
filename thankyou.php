<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>Thank you!</h1>
    <form id="return" action="firstpage.html">
        <input type="submit" value="Home">
    </form>

<div id="main" class="main-message">

<table class="spcaTable">
<?php
set_error_handler(function($errno, $errstr, $errfile, $errline, $errcontext) {
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});
try{
    $valA = $_POST["a"];                      
    $valB = $_POST["b"];
    $valC = $_POST["c"];
    $valD = $_POST["d"];
    $valE = $_POST["e"];
    $valF = $_POST["f"];
    $valG = $_POST["g"];
    $valH = $_POST["h"];
    $valI = $_POST["i"];
    $valJ = $_POST["j"];
    $valK = $_POST["k"];
    $conn = new PDO('mysql:host=localhost;dbname=spca_db', "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $sql = "$valA$valB$valC$valD$valE$valF$valG$valH$valI$valJ$valK";
    
    $stmt = $conn->prepare($sql);
    if($stmt){
        $stmt->execute();
        echo "<h3>Completed!</h3>";
    }
    else{
        echo "<h3>Your request could not be completed!</h3>";
        echo "<h3>Please try again</h3>";

    }
}
    catch(\Exception $e){
        echo "<h3>Your request could not be completed!</h3>";
        echo "<h3>Please try again</h3>";
    }

$conn = null;
?>
</body>
</html>