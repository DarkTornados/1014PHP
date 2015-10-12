<?php

define("NAME", "Rudi");





function get_price($peaces, $item_price = 100, $discount = 0) 
{
   echo NAME;
	return ($peaces * $item_price) - $discount;
}

function calculate_tax($tax, $price) {
	return $tax * $price;
}


get_price(5);