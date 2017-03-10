<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="Project04Style.css">
<body>
<div class="cake">
<h1 style="margin:auto">Soda-Pop Shop</h1>
<h2>Order Review</h2>
<div class="path" style="width:750px; margin:auto; padding-left:20px; padding-right:50px; color:black;">
<h2>Order
    <?php
    $cancel = $_POST["cancel"];
    $confirm = $_POST["confirm"];

if ($cancel == "Cancel Order")
   echo "Cancelled</h2> <p>Your order has been cancelled.</p>";
else if ($confirm == "Confirm Order")
   echo "Confirmed</h2> <p>Your order has been confirmed. Thank you for shopping with the Soda-Pop Shop!</p>";
      
    ?>
</div>

<p class="cake">This is the site of the Soda-Pop Shop at www.SodaPopShop.com. Soda-Pop Shop 2016</p>
<p class="cake" style="font-size:110%;">In case you need to leave: <a href="Project04.php">Back to Order Page</a></p>
   </div>
</body>
</html>
    