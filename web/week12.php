<!DOCTYPE html>
<html>
<script type="text/javascript" src="Project04JavaScript.js"></script>
<link rel="stylesheet" type="text/css" href="Project04Style.css">
<body>
<div class="cake cb-beta logo-padding chunk-entity">
<h1 style="margin:auto">Soda-Pop Shop</h1>
<h2>Order Review</h2>
<div class="cake" style="width:750px; margin:auto; padding-left:20px; padding-right:50px; color:black;">
<h2>Purchase Items Review</h2>
<h4 style="text-align:left;">

<?php
$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];
$m4 = $_POST["m4"];
$m5 = $_POST["m5"];
$m6 = $_POST["m6"];
$m7 = $_POST["m7"];
$m8 = $_POST["m8"];

$c1 = $_POST["c1"];
$c2 = $_POST["c2"];
$c3 = $_POST["c3"];
$c4 = $_POST["c4"];
$c5 = $_POST["c5"];
$c6 = $_POST["c6"];
$c7 = $_POST["c7"];
$c8 = $_POST["c8"];
$c9 = $_POST["c9"];
$c10 = $_POST["c10"];

$s1 = $_POST["s1"];
$s2 = $_POST["s2"];
$s3 = $_POST["s3"];
$s4 = $_POST["s4"];
$s5 = $_POST["s5"];
$s6 = $_POST["s6"];
$s7 = $_POST["s7"];
$s8 = $_POST["s8"];
$s9 = $_POST["s9"];
$s10 = $_POST["s10"];

$m = array($m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8);
$c = array($c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10);
$s = array($s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10);

$pop = array("Chunk O' Chocolate", "Fizzy Classic", "Love Potion","Secret Soda",
 "Xtremely Sweet", "Mystery Monthly Special",
 
 "Blackberry Blast", "Choose the Sprite", "Deliciously Peachy", "Ewwie Gooey Spewie",
 "Grapefruit Grapple", "Hot Spicy Cinnamon", "Jamming Jungle Juice", "Malicious Mix",
 "Orange Zap", "Potassium Power", "Roots and Vegetables",
 "Too Much Mango", "Venomously Sour", "Wishy Washy", "When a Coke is Placed Before You",
 "Yellin' Screamin'", "Mystery Classic Soft Drink",
 
 "Apple Snaps", "Ill Tempered Child", "Not Your Normal One",
 "Queen's Delight", "U Will Like This One", "Zazzle Pizzazz",
 "Mystery Luxury Splendor");
 
 

$cheap = 0;
$classic = 0;
$self = 0;

for($i = 0; $i < count($pop); $i++)
{
   
   for($a = 0; $a < count($m); $a++)
   {
      if ($m[$a] != 0)
      {
		echo "<span style=float:right>";
        echo $m[$a] . " " . $pop[$i] . "(Luxury Splendor) @ $10.00 = $" . number_format(($m[$a] * 5), 2);
        echo "</span><br />";
        $cheap = $cheap + $m[$a];
      }
      $i++;
   }
   for($a = 0; $a < count($c); $a++)
   {
      if ($c[$a] != 0)
      {
		echo "<span style=float:right>";
        echo $c[$a] . " " . $pop[$i] . " (Classic Soft Drink) @  $7.50 = $" . number_format(($c[$a] * 7.5), 2);
        echo "</span><br />";
        $classic = $classic + $c[$a];
      }
      $i++;
   }
   for($a = 0; $a < count($s); $a++)
   {
      if ($s[$a] != 0)
      {
         echo "<span style=float:right>";
         echo $s[$a] . " " . $pop[$i] . "(Monthly Special) @  $5.00 = $" . number_format(($s[$a] * 10), 2);
         echo "</span><br />";
         $self = $self + $s[$a];
      }
      $i++;
   }
   
   $i = 100;
}
echo "<br /> Total Items: ";

$test = $self + $classic + $cheap;
$self2 = $self * 10.00;
$classic2 = $classic * 7.50;
$cheap2 = $cheap * 5.00;
$tax = .085;
$subtotal = $cheap2 + $classic2 + $self2;
$taxTotal= $tax * $subtotal;

echo $test;
echo "<span style=float:right>Subtotal: $";
echo number_format($subtotal,2);
echo "<br />Tax: $";
echo number_format($taxTotal,2);
echo "<br />Shipping: $3.16";

$total = $taxTotal + $subtotal + 3.16;

echo "<br /><span style='font-size:150%'>Total: $";
echo number_format($total,2);
echo "</span></span><br /><br /><br /><br />";

?>

</h4>
<div style="border-bottom: thick solid black;"></div>

<h2>Personal Information Review</h2>
<h4 style="text-align:left;">

<?php
echo "Name: ";
echo $_POST["firstName"], " ";
echo $_POST["lastName"], "<br>";
echo "Billing Address:","<br></br>";
echo $_POST["streetAddress"], "<br>";
echo $_POST["city"], ", ";
echo $_POST["state"], "<br>";
echo $_POST["zipCode"], "<br></br>";
echo "Phone Number: ";
echo $_POST["phoneNumber"], "<br>";
echo "Card Type: ";
echo $_POST["card"], "<br>";
echo "Card Exp Date: ";
echo $_POST["cardMonth"], " ";
echo $_POST["cardYear"], "<br>";
echo "Card Number: ";
echo $_POST["cardNumber"], "<br>";
?>
<br />
<div style="border-bottom: thick solid black;"></div>
<br />
</h4>
<form action="week12a.php" method="post">
<input value="Confirm Order" name="confirm" type="submit"></input>
<input value="Cancel Order" name="cancel" type="submit"></input>
</form>
</div>
<p class="cake">This is the site of the Soda-Pop Shop. Soda-Pop Shop 2017</p>
</div>
</body>
</html>
    