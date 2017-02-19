<?php
$sodaname_search = $_POST["sodaname"];
$popularity_search = $_POST["popularity"];
$sugar_search = $_POST["sugar"];
$caffeine_search = $_POST["caffeine"];
$flavor_search = $_POST["flavor"];
$brand_search = $_POST["brand"];
$company_search = $_POST["company"];

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
       <h1 class="text-center">Soda Search Results</h2>
       <div class="container">
         <ul class="breadcrumb">
           <li><a href="Home.html">Home</a></li>
           <li><a href="Assignments.html">Assignments</a></li>
           <li><a href="project01a.php">Project01</a></li>
           <li><a href="project01b.php">Soda Search</a></li>
           <li class ="active"><a href="project01f.php">Soda Search Results</a></li>
         </ul>
		</div>
		
	<div class="black-chunk paddy cake">
		<br></br>
		
		<ul>In this query you were searching for a soda with:<ul>
		<?php 
		if ($sodaname_search != "")
				echo "<li>A specific name called '$sodaname_search'.</li>";
			if ($popularity_search != "0")
				echo "<li>A popularity of '$popularity_search'.</li>";
			if ($sugar_search != "0")
				if ($sugar_search == "1")
					echo "<li>A sugary soda.</li>";
				if ($sugar_search == "2")
					echo "<li>A sugar-free soda.</li>";
			if ($caffeine_search != "0")
				if ($caffeine_search == "1")
					echo "<li>A caffeinated soda.</li>";
				if ($caffeine_search == "2")
					echo "<li>A caffeine-free soda.</li>";
			if ($flavor_search != "1")
					echo "<li>A soda of a certain flavor.</li>";
			if ($brand_search != "0")
					echo "<li>A soda from a certain brand.</li>";
			if ($company_search != "0")
					echo "<li>A soda from a certain company</li>";
			if ($sodaname_search == "")
				if ($popularity_search == "0")
					if ($sugar_search == "0")
						if ($caffeine_search == "0")
							if ($flavor_search == "1")
								if ($brand_search == "0")
									if ($company_search == "0")
									echo "<li>No queries at all.</li>";
		?>
		
		<br></br>
			
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
		
		$query = "SELECT pop.soda_name, pop.soda_popularity, pop.soda_sugar, pop.soda_caffeine, uno.flavor_name, dos.flavor_name 
			AS flavor2_name, brand.brand_name, company.company_name, uno.flavor_id, dos.flavor_id AS flavor2_id, brand.brand_id, company.company_id 
			FROM soda pop
			JOIN flavor uno ON pop.flavor1_id = uno.flavor_id
			JOIN flavor dos ON pop.flavor2_id = dos.flavor_id
			JOIN brand ON pop.brand_id = brand.brand_id
			JOIN company ON pop.company_id = company.company_id;";
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		
		$option = 0;
		$hit = 0;
		
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$go = 1;
			
			$name = $row['soda_name'];
			$popularity = $row['soda_popularity'];
			$sugar = $row['soda_sugar'];
			$caffeine = $row['soda_caffeine'];
			$flavor1 = $row['flavor_name'];
			$flavor2 = $row['flavor2_name'];
			$brand = $row['brand_name'];
			$company = $row['company_name'];
			
			$flavorid1 = $row['flavor_id'];
			$flavorid2 = $row['flavor2_id'];
			$brandid = $row ['brand_id'];
			$companyid = $row ['company_id'];
			
			//filters
			if ($sodaname_search != "")
				if ($sodaname_search != $name)
					$go = 0;
			if ($popularity_search != "0")
				if ($popularity_search != $popularity)
					$go = 0;
			if ($sugar_search != "0")
				if ($sugar_search == "1")
					if ($sugar == "0")
						$go = 0;
				if ($sugar_search == "2")
					if ($sugar != "0")
						$go = 0;
			if ($caffeine_search != "0")
				if ($caffeine_search == "1")
					if ($caffeine == "0")
						$go = 0;
				if ($caffeine_search == "2")
					if ($caffeine != "0")
						$go = 0;
			if ($flavor_search != "1")
				if ($flavor_search != $flavorid1)
					if ($flavor_search != $flavorid2)
						$go = 0;
			if ($brand_search != "0")
				if ($brand_search != $brandid)
					$go = 0;
			if ($company_search != "0")
				if ($company_search != $companyid)
					$go = 0;
			
			if ($go == 1)
			{
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
				$hit++;
			}
			
			}
			
		?>
		</table>
		<br></br>
		
		<?php
		
		if ($hit == 0)
			echo "<h4 class=\"me\">No matching results</h4>";
		else
			echo "<h4 class=\"me\">There are $hit matching results to your query.</h4>";
		?>	
		
		<br></br>
		
	</div>
	<div class="row">
        <div class="col-sm-12">
			<p class="text-center">This site is for my CS313 Class, nothing fancy here.</p>
        </div>
    </div>
</body>
</html>