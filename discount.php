<?php
$message = "how much is the purchase price? ";
print $message;
//flush();
//ob_flush();
$price_confirmation = trim (fgets(STDIN));
if (floatval($price_confirmation) <= 10.00) {
	$discount_price = floatval($price_confirmation) * .90;
	print ("Your discount is 10% <br>");
	print ("Your discounted price is $discount_price <br>");
}
  else if(floatval($price_confirmation) > 10.00) {
  	$discount_price = floatval($price_confirmation) * .80;
  	print ("Your discount is 20% <br>");
  	print ("Your discounted price is $discount_price <br>");		
	}
	
?>