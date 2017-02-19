<?php
session_start();
//Add New Soda

if ($_POST["passcode"] == "adminkey")
	{
	$_SESSION["Password"] = "adminkey";
	}

if ($_SESSION["Password"] != "adminkey")
	{
	$resultPage = "/Project01d.php";
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
           <li><a href="project01a.php">Project01</a></li>
           <li class="active"><a href="project01c.php">Add New Soda</a></li>
         </ul>
		</div>
	<div class="black-chunk paddy cake">
		
		<h2 class="me text-center">Add New Soda Information Here.</h2>
		
		<?php
		if ($_SESSION["Pass"] == "1")
		echo "<h3 class=\"funfact paddy text-center\"> Soda successfully added. </h3>";
		
		if ($_SESSION["Pass"] == "0")
		echo "<h3 class=\"funfact paddy text-center\"> Invalid soda entry. </h3>";
		
		$_SESSION["Pass"] = "2";
		
		?>
		<div class="paddy cake">
		<form action="project01e.php" method="post">
		
		<text>Soda Name</text>
		<input name="soda" type="text"></input>
		
		<br></br>
		
		<text>Popularity (Scale of 1 - 10)</text>
		<select name="popularity">
		<option value="0"></option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		</select>
		
		<br></br>
		
		<text>Sugar Content (Grams per cup)</text>
		<input type="text" name="sugar" maxlength="3" size="3"></input>	
		
		<br></br>
		
		<text>Caffiene Content (Milligrams per cup)</text>
		<input type="text" name="caffeine" maxlength="3" size="3"></input>
			
		<br></br>
		
		<text>Flavor 1</text>
		<select name="flavor1">
		<?php
		
		$query = "SELECT f1.flavor_name FROM flavor f1;";
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		
		$option = 1;
		
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$flavor = $row['flavor_name'];
			echo '<option value="' . $option . '">' . $flavor . '</option>';
			$option++;
			}
		
		?>
		
		</select>
		<br></br>	
		
		<text>Flavor 2 (Optional)</text>
		<select name="flavor2">
		<?php
		
		$query = "SELECT f2.flavor_name FROM flavor f2;";
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		
		$option = 1;
		
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$flavor = $row['flavor_name'];
			echo '<option value="' . $option . '">' . $flavor . '</option>';
			$option++;
			}
		
		?>
		
		</select>
		<br></br>						
		
		<text>Brand Name</text>
		<select name="brand">
		<option value="0"></option>
		
		<?php
		
		$query = "SELECT b.brand_name FROM brand b;";
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		
		$option = 1;
		
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$brand = $row['brand_name'];
			echo '<option value="' . $option . '">' . $brand . '</option>';
			$option++;
			}
		
		?>
		
		</select>
		<br></br>

		<text>Company Name</text>
		<select name="company">
		<option value="0"></option>
		
		<?php
		
		$query = "SELECT c.company_name FROM company c;";
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		
		$option = 1;
		
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$company = $row['company_name'];
			echo '<option value="' . $option . '">' . $company . '</option>';
			$option++;
			}
		?>
		
		</select>
		<br></br>
		
		<input type="submit"></input>
		</form>
		</div>
	</div>
	<div class="row">
        <div class="col-sm-12">
			<p class="text-center">This site is for my CS313 Class, nothing fancy here.</p>
        </div>
    </div>
    </body>
</html>