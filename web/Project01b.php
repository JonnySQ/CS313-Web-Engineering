<?php

include ("testdatabase.php");
?>
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
       <h1 class="text-center">Soda Search</h2>
       <div class="container">
         <ul class="breadcrumb">
           <li><a href="Home.html">Home</a></li>
           <li><a href="Assignments.html">Assignments</a></li>
           <li><a href="Project01a.php">Project01</a></li>
           <li class ="active"><a href="Project01b.php">Soda Search</a></li>
         </ul>
		</div>
		
	<div class="black-chunk paddy cake">
		<h2 class="me text-center">What Kind of Soda are You Looking For?</h2>
		<div class="paddy cake">
		<form action="Project01f.php" method="post">
		
		<text>Soda Name</text>
		<input type="text" name="sodaname"></input>
		
		<br></br>
		
		<text>Popularity</text>
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
		
		<text>Sugar Content</text>
		<select name="sugar">
		<option value="0"></option>
		<option value="1">Has Sugar</option>
		<option value="2">Sugar Free</option>
		</select>		
		
		<br></br>
		
		<text>Caffiene Content</text>
		<select name="caffeine">
		<option value="0"></option>
		<option value="1">Has Caffiene</option>
		<option value="2">Caffiene Free</option>
		
		</select>		
		<br></br>
		
		<text>Flavor</text>
		<select name="flavor">
		<?php
		
		$query = "SELECT f.flavor_name FROM flavor f;";
		
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
		</div>
		
		
		
		</form>
		
		<table class="table-bordered">
			<tr class="man">
			<th class="paddy" >Soda Name</th>
			<th class="paddy" >Pop.</th>
			<th class="paddy" >Sugar (g)</th>
			<th class="paddy" >Caffeine (mg)</th>
			<th class="paddy" >Flavor</th>
			<th class="paddy" >Flavor #2</th>
			<th class="paddy" >Brand</th>
			<th class="paddy" >Company</th>
			</tr>
		
		<?php
		
		$query = "SELECT pop.soda_name, pop.soda_popularity, pop.soda_sugar, pop.soda_caffeine, uno.flavor_name, dos.flavor_name AS flavor2_name, brand.brand_name, company.company_name 
			FROM soda pop
			JOIN flavor uno ON pop.flavor1_id = uno.flavor_id
			JOIN flavor dos ON pop.flavor2_id = dos.flavor_id
			JOIN brand ON pop.brand_id = brand.brand_id
			JOIN company ON pop.company_id = company.company_id;";
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		
		$option = 0;
		
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$name = $row['soda_name'];
			$popularity = $row['soda_popularity'];
			$sugar = $row['soda_sugar'];
			$caffeine = $row['soda_caffeine'];
			$flavor1 = $row['flavor_name'];
			$flavor2 = $row['flavor2_name'];
			$brand = $row['brand_name'];
			$company = $row['company_name'];
			
			if ($option == 0)
				{
				echo "<tr class=baker>";
				$option++;
				}
			else
				{
				echo"<tr class=man>";
				$option = 0;
				}
			echo "<td class=\"paddy\">$name</td>";
			echo "<td class=\"paddy\">$popularity</td>";
			echo "<td class=\"paddy\">$sugar</td>";
			echo "<td class=\"paddy\">$caffeine</td>";
			echo "<td class=\"paddy\">$flavor1</td>";
			echo "<td class=\"paddy\">$flavor2</td>";
			echo "<td class=\"paddy\">$brand</td>";
			echo "<td class=\"paddy\">$company</td></tr>";
			
			}
			
		?>		
		</table>
		<br></br>
			
	</div>
	<div class="row">
        <div class="col-sm-12">
			<p class="text-center">This site is for my CS313 Class, nothing fancy here.</p>
        </div>
    </div>
</body>
</html>