<?php
session_start();
//Add New Soda

if ($_SESSION["Password"] == "adminkey")
	{
	$resultPage = "/Project01c.php";
	header('Location: '.$resultPage);
	}


include("testdatabase.php");
?>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="Week02Ponder.css"></link>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
       <h1 class="text-center">Add New Soda</h1>
       <div class="container">
         <ul class="breadcrumb">
           <li><a href="Home.html">Home</a></li>
           <li><a href="Assignments.html">Assignments</a></li>
           <li><a href="Project01a.php">Project01</a></li>
           <li class="active"><a href="Project01c.php">Add New Soda</a></li>
         </ul>
		</div>
	<div class="black-chunk paddy cake">
		<br></br>
		<form action="/Project01c.php" method="post">
		<h4>Admin Password Required</h4>
		<input type="password" name="passcode"></input>
		<h5>Hint: "adminkey"</h5>
		<input type="submit"></input>
		</form>
	</div>
	<div class="row">
        <div class="col-sm-12">
			<p class="text-center">This site is for my CS313 Class, nothing fancy here.</p>
        </div>
    </div>
    </body>
</html>