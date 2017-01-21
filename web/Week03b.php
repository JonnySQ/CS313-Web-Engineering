<?php
session_start();

//$results = array_fill(0, 50, 0);
	
$results = json_decode(file_get_contents('results.json'), true);

if ($_GET)
{
	$_SESSION["MBTI"] = $_GET["MBTI"];
	$_SESSION["EN"] = $_GET["EN"];
	$_SESSION["WZ"] = $_GET["WZ"];
	$_SESSION["EZ"] = $_GET["EZ"];
	$_SESSION["Complete"] = "5";
	
	++$results[0];
	
	if ($_SESSION["MBTI"] == "ISFJ")
	++$results[1];
	if ($_SESSION["MBTI"] == "ESFJ")
	++$results[2];
	if ($_SESSION["MBTI"] == "INFJ")
	++$results[3];
	if ($_SESSION["MBTI"] == "ENFJ")
	++$results[4];
	if ($_SESSION["MBTI"] == "ISTJ")
	++$results[5];
	if ($_SESSION["MBTI"] == "ESTJ")
	++$results[6];
	if ($_SESSION["MBTI"] == "INTJ")
	++$results[7];
	if ($_SESSION["MBTI"] == "ENTJ")
	++$results[8];
	if ($_SESSION["MBTI"] == "ISFP")
	++$results[9];
	if ($_SESSION["MBTI"] == "ESFP")
	++$results[10];
	if ($_SESSION["MBTI"] == "INFP")
	++$results[11];
	if ($_SESSION["MBTI"] == "ENFP")
	++$results[12];
	if ($_SESSION["MBTI"] == "ISTP")
	++$results[13];
	if ($_SESSION["MBTI"] == "ESTP")
	++$results[14];
	if ($_SESSION["MBTI"] == "INTP")
	++$results[15];
	if ($_SESSION["MBTI"] == "ENTP")
	++$results[16];

	if ($_SESSION["EN"] == "One")
	++$results[17];
	if ($_SESSION["EN"] == "Two")
	++$results[18];
	if ($_SESSION["EN"] == "Three")
	++$results[19];
	if ($_SESSION["EN"] == "Four")
	++$results[20];
	if ($_SESSION["EN"] == "Five")
	++$results[21];
	if ($_SESSION["EN"] == "Six")
	++$results[22];
	if ($_SESSION["EN"] == "Seven")
	++$results[23];
	if ($_SESSION["EN"] == "Eight")
	++$results[24];
	if ($_SESSION["EN"] == "Nine")
	++$results[25];
	
	if ($_SESSION["WZ"] == "Aquarius")
	++$results[26];
	if ($_SESSION["WZ"] == "Pisces")
	++$results[27];
	if ($_SESSION["WZ"] == "Aries")
	++$results[28];
	if ($_SESSION["WZ"] == "Taurus")
	++$results[29];
	if ($_SESSION["WZ"] == "Gemini")
	++$results[30];
	if ($_SESSION["WZ"] == "Cancer")
	++$results[31];
	if ($_SESSION["WZ"] == "Leo")
	++$results[32];
	if ($_SESSION["WZ"] == "Virgo")
	++$results[33];
	if ($_SESSION["WZ"] == "Libra")
	++$results[34];
	if ($_SESSION["WZ"] == "Scorpio")
	++$results[35];
	if ($_SESSION["WZ"] == "Sagittarius")
	++$results[36];
	if ($_SESSION["WZ"] == "Capricorn")
	++$results[37];
	
	if ($_SESSION["EZ"] == "Rat")
	++$results[38];
	if ($_SESSION["EZ"] == "Ox")
	++$results[39];
	if ($_SESSION["EZ"] == "Tiger")
	++$results[40];
	if ($_SESSION["EZ"] == "Rabbit")
	++$results[41];
	if ($_SESSION["EZ"] == "Dragon")
	++$results[42];
	if ($_SESSION["EZ"] == "Snake")
	++$results[43];
	if ($_SESSION["EZ"] == "Horse")
	++$results[44];
	if ($_SESSION["EZ"] == "Goat")
	++$results[45];
	if ($_SESSION["EZ"] == "Monkey")
	++$results[46];
	if ($_SESSION["EZ"] == "Rooster")
	++$results[47];
	if ($_SESSION["EZ"] == "Dog")
	++$results[48];
	if ($_SESSION["EZ"] == "Pig")
	++$results[49];

	file_put_contents("results.json",json_encode($results));
	
}



$MBTI = $_SESSION["MBTI"];
$EN = $_SESSION["EN"];
$WZ = $_SESSION["WZ"];
$EZ = $_SESSION["EZ"];

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Week02Ponder.css"></link>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
		<nav class="navbar navbar-default">
        <div class="container-fluid">
           <div class="navbar-header">
             <a class="navbar-brand" href="Home.html">CS 313 [Jon Crawford]</a>
           </div>
           <ul class="nav navbar-nav">
             <li><a href="Home.html">Home</a></li>
             <li><a href="Introduction.html">Self-Introduction</a></li>
             <li><a href="Assignments.html">Assignments</a></li>
           </ul>
         </div>
       </nav>
       <h1 class="text-center">Week03</h2>
       <div class="container">
         <ul class="breadcrumb">
           <li><a href="Home.html">Home</a></li>
           <li><a href="Assignments.html">Assignments</a></li>
           <li><a href="Week03.php">Week 03</a></li>
           <li><a href="Week03b.php">Results</a></li>
         </ul>
       </div>
    </div>
    
    <h1 class="text-center">Results</h1>
    
    <div class="cake black-chunk side-lines">
    <br></br>
    
    <?php
    if ($_SESSION["Complete"] == "5")
    {
    echo "<legend>Your Responces</legend>";
    echo "<li>MBTI Type: ". $MBTI . "</li>";
    echo "<li>Enneagram Number: " . $EN . " </li>";
    echo "<li>Western Zodiac: " . $WZ . "</li>";
    echo "<li>Eastern Zodiac: " . $EZ . "</li>";
    echo "<br></br>";
    }
    ?>
    
    <legend>Total Number of Responces: <?php echo $results[0]; ?></legend>
    
    <legend>MBTI Results</legend>
    <ul>
    <li>ISFJ: <?php echo $results[1]; ?> </li>
    <li>ESFJ: <?php echo $results[2]; ?></li>
    <li>INFJ: <?php echo $results[3]; ?></li>
    <li>ENFJ: <?php echo $results[4]; ?></li>
    <li>ISTJ: <?php echo $results[5]; ?></li>
    <li>ESTJ: <?php echo $results[6]; ?></li>
    <li>INTJ: <?php echo $results[7]; ?></li>
    <li>ENTJ: <?php echo $results[8]; ?></li>
    <li>ISFP: <?php echo $results[9]; ?></li>
    <li>ESFP: <?php echo $results[10]; ?></li>
    <li>INFP: <?php echo $results[11]; ?></li>
    <li>ENFP: <?php echo $results[12]; ?></li>
    <li>ISTP: <?php echo $results[13]; ?></li>
    <li>ESTP: <?php echo $results[14]; ?></li>
    <li>INTP: <?php echo $results[15]; ?></li>
    <li>ENTP: <?php echo $results[16]; ?></li>
    </ul>
    
    <legend>Enneagram Results</legend>
    <ul>
    <li>One: <?php echo $results[17]; ?></li>
    <li>Two: <?php echo $results[18]; ?></li>
    <li>Three: <?php echo $results[19]; ?></li>
    <li>Four: <?php echo $results[20]; ?></li>
    <li>Five: <?php echo $results[21]; ?></li>
    <li>Six: <?php echo $results[22]; ?></li>
    <li>Seven: <?php echo $results[23]; ?></li>
    <li>Eight: <?php echo $results[24]; ?></li>
    <li>Nine: <?php echo $results[25]; ?></li>
    </ul>
    
    <legend>Western Zodiac Results</legend>
    <ul>
    <li>Aquarius: <?php echo $results[26]; ?></li>
    <li>Pisces: <?php echo $results[27]; ?></li>
    <li>Aries: <?php echo $results[28]; ?></li>
    <li>Taurus: <?php echo $results[29]; ?></li>
    <li>Gemini: <?php echo $results[30]; ?></li>
    <li>Cancer: <?php echo $results[31]; ?></li>
    <li>Leo: <?php echo $results[32]; ?></li>
    <li>Virgo: <?php echo $results[33]; ?></li>
    <li>Libra: <?php echo $results[34]; ?></li>
    <li>Scorpio: <?php echo $results[35]; ?></li>
    <li>Sagittarius: <?php echo $results[36]; ?></li>
    <li>Capricorn: <?php echo $results[37]; ?></li>
    </ul>
    
    <legend>Eastern Zodiac Results</legend>
    <ul>
    <li>Rat: <?php echo $results[38]; ?></li>
    <li>Ox: <?php echo $results[39]; ?></li>
    <li>Tiger: <?php echo $results[40]; ?></li>
    <li>Rabbit: <?php echo $results[41]; ?></li>
    <li>Dragon: <?php echo $results[42]; ?></li>
    <li>Snake: <?php echo $results[43]; ?></li>
    <li>Horse: <?php echo $results[44]; ?></li>
    <li>Goat: <?php echo $results[45]; ?></li>
    <li>Monkey: <?php echo $results[46]; ?></li>
    <li>Rooster: <?php echo $results[47]; ?></li>
    <li>Dog: <?php echo $results[48]; ?></li>
    <li>Pig: <?php echo $results[49]; ?></li>
    </ul>
    </div>
    
    <div class="row">
		<div class="col-sm-12">
			<p class="text-center">This site is for my CS313 Class, nothing fancy here.</p>
		</div>
	</div>
	
</div>
</body>
</html>