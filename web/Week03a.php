<?php
session_start();
if ($_SESSION["Complete"] == "5")
	{
	$resultPage = "/Week03b.php";
	header('Location: '.$resultPage);
	}

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
           <li><a href="Week03a.php">Survey</a></li>
         </ul>
       </div>
         
<h3 class="text-left cake"><a class="funselecty paddy" href="/Week03b.php">Skip to Results</a></h3>

<form action="Week03b.php" method="get">
<h1 class="text-center">Survey</h1>
<div class="cake black-chunk side-lines">
	<br></br>
	<fieldset>
	<legend>Question 1</legend>
	<p>What is your MBTI Personality type. If you do not know, please take this quiz 
		<a href="https://www.16personalities.com/free-personality-test">here</a>.</p>
	<input type="radio" name="MBTI" value="ISFJ">ISFJ</input>
	<input type="radio" name="MBTI" value="ESFJ">ESFJ</input>
	<input type="radio" name="MBTI" value="INFJ">INFJ</input>
	<input type="radio" name="MBTI" value="ENFJ">ENFJ</input><br></br>

	<input type="radio" name="MBTI" value="ISTJ">ISTJ</input>
	<input type="radio" name="MBTI" value="ESTJ">ESTJ</input>
	<input type="radio" name="MBTI" value="INTJ">INTJ</input>
	<input type="radio" name="MBTI" value="ENTJ">ENTJ</input><br></br>

	<input type="radio" name="MBTI" value="ISFP">ISFP</input>
	<input type="radio" name="MBTI" value="ESFP">ESFP</input>
	<input type="radio" name="MBTI" value="INFP">INFP</input>
	<input type="radio" name="MBTI" value="ENFP">ENFP</input><br></br>

	<input type="radio" name="MBTI" value="ISTP">ISTP</input>
	<input type="radio" name="MBTI" value="ESTP">ESTP</input>
	<input type="radio" name="MBTI" value="INTP">INTP</input>
	<input type="radio" name="MBTI" value="ENTP">ENTP</input><br></br>
	</fieldset>
	<fieldset>
	<legend>Question 2</legend>
	<p>What is your Enneagram Number? If you do not know, please take this quiz 
		<a href="https://www.eclecticenergies.com/enneagram/test.php">here</a>.</p>
	<input type="radio" name="EN" value="One">One</input>
	<input type="radio" name="EN" value="Two">Two</input>
	<input type="radio" name="EN" value="Three">Three</input><br></br>

	<input type="radio" name="EN" value="Four">Four</input>
	<input type="radio" name="EN" value="Five">Five</input>
	<input type="radio" name="EN" value="Six">Six</input><br></br>

	<input type="radio" name="EN" value="Seven">Seven</input>
	<input type="radio" name="EN" value="Eight">Eight</input>
	<input type="radio" name="EN" value="Nine">Nine</input><br></br>
	</fieldset>

	<fieldset>
	<legend>Question 3</legend>
	<p>What is your Western Zodiac Sign? If you do not know, please make reference to this site 
		<a href="http://www.dummies.com/religion/spirituality/signs-of-the-zodiac-symbols-dates-traits-and-planetary-rulers/">here</a>.</p>

	<input type="radio" name="WZ" value="Aquarius">Aquarius</input>
	<input type="radio" name="WZ" value="Pisces">Pisces</input>
	<input type="radio" name="WZ" value="Aries">Aries</input><br></br>

	<input type="radio" name="WZ" value="Taurus">Taurus</input>
	<input type="radio" name="WZ" value="Gemini">Gemini</input>
	<input type="radio" name="WZ" value="Cancer">Cancer</input><br></br>

	<input type="radio" name="WZ" value="Leo">Leo</input>
	<input type="radio" name="WZ" value="Virgo">Virgo</input>
	<input type="radio" name="WZ" value="Libra">Libra</input><br></br>

	<input type="radio" name="WZ" value="Scorpio">Scorpio</input>
	<input type="radio" name="WZ" value="Sagittarius">Sagittarius</input>
	<input type="radio" name="WZ" value="Capricorn">Capricorn</input><br></br>
	</fieldset>
	
	<fieldset>
	<legend>Question 4</legend>
	<p>What is your Eastern Zodiac Sign? If you do not know, please make refrence to this site 
		<a href="http://www.chinahighlights.com/travelguide/chinese-zodiac/"> here</a>.</p>

	<input type="radio" name="EZ" value="Rat">Rat</input>
	<input type="radio" name="EZ" value="Ox">Ox</input>
	<input type="radio" name="EZ" value="Tiger">Tiger</input><br></br>

	<input type="radio" name="EZ" value="Rabbit">Rabbit</input>
	<input type="radio" name="EZ" value="Dragon">Dragon</input>
	<input type="radio" name="EZ" value="Snake">Snake</input><br></br>

	<input type="radio" name="EZ" value="Horse">Horse</input>
	<input type="radio" name="EZ" value="Goat">Goat</input>
	<input type="radio" name="EZ" value="Monkey">Monkey</input><br></br>

	<input type="radio" name="EZ" value="Rooster">Rooster</input>
	<input type="radio" name="EZ" value="Dog">Dog</input>
	<input type="radio" name="EZ" value="Pig">Pig</input><br></br>

	<input type = "reset"></input>
	<input type = "submit"><br></br>
	</fieldset>
</div>
</form>

<div class="row">
    <div class="col-sm-12">
        <p class="text-center">This site is for my CS313 Class, nothing fancy here.</p>
    </div>
</div>

</body>
</html>

