<html>
<head>
	<title>Soda-Pop Shop Checkout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="Project04Style.css">
	<script type="text/javascript" src="Project04JavaScript.js"></script>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body class="chunk-entity cake">
	<div class="cb-alpha logo-padding chunk-bot">
	<img class="chunk-logo" src= "/SodaLogo.png"
	alt="Logo"></img>
	</div>
	
	<div class="cb-beta menu-padding chunk-bot">
	<h2><a class="menu-home-setup" href="week13.html">Home</a>  
	<a class="menu-flavor-list-setup" href="week13.html">Flavor List</a>
	</h2>
	<br></br>
	</div>
	
	<div class="cb-cent menu-padding text-center chunk-bot">
	<h1>Inventory List</h1>
	<p>Please select your product choices. Flavors are sold in a 12 pack set of 12oz cans.</p>
	</div>
	
	<form action="week12.php" method="post">
	
	<div class="row chunk-row cb-cent menu-padding chunk-bot">
	
	<div class="col-sm-4">
		<div>
			<h3>Monthly Specialties</h3> 
			<h3 class="chunk-row2">($5.00 Each)</h3>
		</div>
	
	<select id="m1" name="m1">
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
	<text>Chunk O' Chocolate</text><br></br>
	
	<select id="m2" name= "m2">
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
	<text>Ewwie Gooey Spewie</text><br></br>
			
	
	<select id="m3" name="m3">
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
	<text>Fizzy Classic</text><br></br>	
		
	<select id="m4" name="m4">
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
	<text>Love Potion</text><br></br>
	
	
	<select id="m5" name="m5">
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
	<text>Roots and Vegetables</text><br></br>
	
	<select id="m6" name="m6">
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
	<text>Secret Soda</text><br></br>
	
	<select id="m7" name="m7">
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
	<text>Xtremely Sweet</text><br></br>
	
	<select id="m8" name="m8">
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
	<text>Mystery Monthly Special</text><br></br>
	</div>
	
	
	<div class="col-sm-4 chunk-left">
		<div>
			<h3>Classic Soft Drinks</h3> 
			<h3 class="chunk-row2">($7.50 Each)</h3>
		</div>
	
	<select id="c1" name="c1">
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
	<text>Blackberry Blast</text><br></br>

		<select id="c2" name="c2">
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
	<text>Choose the Sprite</text><br></br>	
	
	<select id="c3" name="c3">
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
	<text>Grapefruit Grapple</text><br></br>
	
	<select id="c4" name="c4">
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
	<text>Hot Spicy Cinnamon</text><br></br>	
	
	<select id="c5" name="c5">
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
	<text>Malicious Mix</text><br></br>
		
	<select id="c6" name="c6">
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
	<text>Orange Zap</text><br></br>	
	
	<select id="c7" name="c7">
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
	<text>Potassium Power</text><br></br>	
	
	<select id="c8" name="c8">
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
	<text>When a Coke is Placed Before You</text><br></br>	
	
		<select id="c9" name="c9">
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
		<text>Yellin' Screamin'</text><br></br>
	
	<select id="c10" name="c10">
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
	<text>Mystery Classic Soft Drink</text><br></br>	
	</div>
	
	<div class="col-sm-4 chunk-left">
		<div>
		<h3>Luxury Splendors</h3>
		<h3 class="chunk-row2">($10.00 Each)</h3>
		</div>
	
	<select id="s1" name="s1">
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
	<text>Apple Snaps</text><br></br>	
	
	<select id="s2" name="s2">
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
	<text>Deliciously Peachy</text><br></br>	
	
	<select id="s3" name="s3">
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
	<text>Ill Tempered Child</text><br></br>
	
	<select id="s4" name="s4">
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
	<text>Jamming Jungle Juice</text><br></br>
	
	<select id="s5" name="s5">
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
	<text>Not Your Normal One</text><br></br>	
	
	<select id="s6" name="s6">
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
	<text>Queen's Delight</text><br></br>
	
	<select id="s7" name="s7">
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
	<text>U Will Like This One</text><br></br>	
	
	<select id="s8" name="s8">
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
	<text>Venomously Sour</text><br></br>	
	
	<select id="s9" name="s9">
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
	<text>Zazzle Pizzazz</text><br></br>	
	
	<select id="s10" name="s10">
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
	<text>Mystery Luxury Splendor</text><br></br>	
	</div> 
		
	</div>
	
	<div class="cb-cent chunk-bot menu-padding">
	<div class="cake2">
	
	<h2 class="text-center">Running Total</h2>
	
	<div class="cake2 text-center">
	<button class="button-fancy" type="button" onclick="TotalUp()">Calculate Running Total</button>
	</div>
	
	<br></br>
	
	<div class="cb-delta lean-right cake3 menu-padding chunk-entity">
	
		<p id="case1" name="case1"></p>
		<p id="case2" name="case2"></p>
		<p id="case3" name="case3"></p>
		<p id="subtotal" name="subtotal"></p>
		<p id="shipping" name="shipping"></p>
		<p id="tax" name="tax" class="chunk-bot"></p>
		
		<h4 id="total" name="total"></h4>
	
	</div>
	</div>
	</div>
	
	<div class="cb-beta menu-padding chunk-bot">
	
	
	
	<h2 class="text-center">Personal & Payment Information</h2>
	
	<div class="cake2">
	
	<text>First Name</text>
	<input type="text" name="firstName" maxlength="18" size="18"></input>
	
	<text class="list-padding">Last Name</text>
	<input type="text" name="lastName" maxlength="24" size="24"></input>

	<br></br>
	
	<text>Street Address</text>
	<input type="text" name="streetAddress" maxlength="45" size="45"></input>
	
	<br></br>
	
	<text>City</text>
	<input type="text" name="city" maxlength="23" size="23"></input>
	
	<text class="list-padding">State</text>
	<select name="state">
		<option value="0"></option>
		<option value="AL">AL</option>
		<option value="AK">AK</option>
		<option value="AZ">AZ</option>
		<option value="AR">AR</option>
		<option value="CA">CA</option>
		<option value="CO">CO</option>
		<option value="CT">CT</option>
		<option value="DE">DE</option>
		<option value="DC">DC</option>
		<option value="FL">FL</option>
		<option value="GA">GA</option>
		<option value="HI">HI</option>
		<option value="ID">ID</option>
		<option value="IL">IL</option>
		<option value="IN">IN</option>
		<option value="IA">IA</option>
		<option value="KS">KS</option>
		<option value="KY">KY</option>
		<option value="LA">LA</option>
		<option value="ME">ME</option>
		<option value="MD">MD</option>
		<option value="MA">MA</option>
		<option value="MI">MI</option>
		<option value="MN">MN</option>
		<option value="MS">MS</option>
		<option value="MO">MO</option>
		<option value="MT">MT</option>
		<option value="NE">NE</option>
		<option value="NV">NV</option>
		<option value="NH">NH</option>
		<option value="NJ">NJ</option>
		<option value="NM">NM</option>
		<option value="NY">NY</option>
		<option value="NC">NC</option>
		<option value="ND">ND</option>
		<option value="OH">OH</option>
		<option value="OK">OK</option>
		<option value="OR">OR</option>
		<option value="PA">PA</option>
		<option value="RI">RI</option>
		<option value="SC">SC</option>
		<option value="SD">SD</option>
		<option value="TN">TN</option>
		<option value="TX">TX</option>
		<option value="UT">UT</option>
		<option value="VT">VT</option>
		<option value="VA">VA</option>
		<option value="WA">WA</option>
		<option value="WV">WV</option>
		<option value="WI">WI</option>
		<option value="WY">WY</option>
	</select>
	
	<text class="list-padding">Zip Code</text>
	<input type="text" name="zipCode" maxlength="5" size="5"></input>
	
	<br></br>
	
	<text>Phone Number</text>
	<input type="text" name="phoneNumber" maxlength="12" size="12"></input>
	
	<br></br>
	
	<text>Card Type</text>
	<select name="card">
		<option value="0"></option>
		<option value="Visa">Visa</option>
		<option value="MasterCard">MasterCard</option>
		<option value="American Express">American Express</option>
		<option value="Discover">Discover</option>
	</select>
	
	<text class="list-padding">Card Exp. Date</text>
	<select name="cardMonth">
		<option value="0"></option>
		<option value="Jan.">Jan.</option>
		<option value="Feb.">Feb.</option>
		<option value="Mar.">Mar.</option>
		<option value="Apr.">Apr.</option>
		<option value="May">May</option>
		<option value="Jun.">Jun.</option>
		<option value="Jul.">Jul.</option>
		<option value="Aug.">Aug.</option>
		<option value="Sept.">Sept.</option>
		<option value="Oct.">Oct.</option>
		<option value="Nov.">Nov.</option>
		<option value="Dec.">Dec.</option>
	</select>
	
	<select name="cardYear">
		<option value="0"></option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2021</option>
		<option value="2021">2021</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
		<option value="2027">2027</option>
		<option value="2028">2028</option>
		<option value="2029">2029</option>
		<option value="2030">2030</option>
		<option value="2031">2031</option>
		<option value="2032">2032</option>
	</select>
	
	<br></br>
	
	<text>Card Number</text>
	<input type="text" name="cardNumber" maxlength="16" size="16"></input>
	
	<br></br>
	
	<div class="cake2 text-center">
	<input class="button-fancy" type="submit" value="Submit Order"></input>
	</div>
	
	</div>
	
	</div>
	
	</form>
	
	<div class="cake2 text-center">
	<p>This is the site of the Soda-Pop Shop. Soda-pop Shop 2017.</p>
	</div>

</body>
</html>