function TotalUp()
{
   
var m1 = parseInt(document.getElementById("m1").value);
var m2 = parseInt(document.getElementById("m2").value);
var m3 = parseInt(document.getElementById("m3").value);   
var m4 = parseInt(document.getElementById("m4").value);   
var m5 = parseInt(document.getElementById("m5").value);   
var m6 = parseInt(document.getElementById("m6").value);   
var m7 = parseInt(document.getElementById("m7").value);   
var m8 = parseInt(document.getElementById("m8").value);   

var c1 = parseInt(document.getElementById("c1").value);
var c2 = parseInt(document.getElementById("c2").value);
var c3 = parseInt(document.getElementById("c3").value);   
var c4 = parseInt(document.getElementById("c4").value);   
var c5 = parseInt(document.getElementById("c5").value);   
var c6 = parseInt(document.getElementById("c6").value);   
var c7 = parseInt(document.getElementById("c7").value);   
var c8 = parseInt(document.getElementById("c8").value);
var c9 = parseInt(document.getElementById("c9").value);   
var c10 = parseInt(document.getElementById("c10").value);

var s1 = parseInt(document.getElementById("s1").value);
var s2 = parseInt(document.getElementById("s2").value);
var s3 = parseInt(document.getElementById("s3").value);   
var s4 = parseInt(document.getElementById("s4").value);   
var s5 = parseInt(document.getElementById("s5").value);   
var s6 = parseInt(document.getElementById("s6").value);   
var s7 = parseInt(document.getElementById("s7").value);   
var s8 = parseInt(document.getElementById("s8").value);
var s9 = parseInt(document.getElementById("s9").value);   
var s10 = parseInt(document.getElementById("s10").value);
   
   amount1 = m1 + m2 + m3 + m4 + m5 + m6 + m7 + m8;
   amount2 = c1 + c2 + c3 + c4 + c5 + c6 + c7 + c8 + c9 + c10;
   amount3 = s1 + s2 + s3 + s4 + s5 + s6 + s7 + s8 + s9 + s10;

   tax = .085;

   cases = amount1 + amount2 + amount3;

   if (cases < 1)
      shipping = 0;
   else
      shipping = 3.16;

   case1 = amount1*5;
   case2 = amount2*7.5;
   case3 = amount3*10;
   
   subtotal = (amount1*5)+(amount2*7.5)+(amount3*10);

   taxTotal = subtotal*tax
   
   total = subtotal + taxTotal + shipping;

   case1 = case1.toFixed(2);
   case2 = case2.toFixed(2);
   case3 = case3.toFixed(2);
   shipping = shipping.toFixed(2);
   taxTotal = taxTotal.toFixed(2);
   subtotal = subtotal.toFixed(2);
   total = total.toFixed(2);

   if (amount1 > 0)
      document.getElementById("case1").innerHTML = amount1 + " Monthly Special cases @ $5.00 = $" + case1;
   else
      document.getElementById("case1").innerHTML = "";
         
   if (amount2 > 0)
      document.getElementById("case2").innerHTML = amount2 + " Classic Soft Drink cases @ $7.50 = $" + case2;
   else
      document.getElementById("case2").innerHTML = "";
   
   if (amount3 > 0)
      document.getElementById("case3").innerHTML = amount3 + " Luxury Splendor cases @ $10.00 = $" + case3;
   else
      document.getElementById("case3").innerHTML = "";
   
   if (cases != 0)
   {
      document.getElementById("shipping").innerHTML = "Shipping = $" + shipping;
      document.getElementById("tax").innerHTML = "Taxes = $" + taxTotal;
      document.getElementById("subtotal").innerHTML = "Subtotal = $" + subtotal;
      document.getElementById("total").innerHTML = "Total = $" + total;
   }
   else
   {
      document.getElementById("shipping").innerHTML = "";
      document.getElementById("tax").innerHTML = "";
      document.getElementById("subtotal").innerHTML = "";
      document.getElementById("total").innerHTML = "";
   }
}
