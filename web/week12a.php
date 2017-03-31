<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="week12.js"></script>
<link rel="stylesheet" type="text/css" href="Project04Style.css">
</head>

<body>
<div class="cake logo-padding chunk-entity cb-eli">
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

<h3>Back To Order Page: <a href="Project04.php">Order Page</a></h3>
   </div>
</body>
</html>
    