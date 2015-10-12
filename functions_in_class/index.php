<?php
//For this PHP exercise, create a function called "hello" that outputs that phrase we all know and love, "Hello, World!" to the browser. Call the function.

function write() {
	echo "Hello world!";
}

write();

echo "<br>";
/*This PHP exercise has two parts. For the first, you will create a function to accept two arguments,
 perform a calculation using them, then return a sentence with the result to the browser.
  The function will calculate the area of a rectangle, with the two arguments being width and height. 
  (Reminder: area = width * height.) The sentence to be returned is "A rectangle of length $l and width $w has an area of $area.", where $l and $w are the arguments and $area is the result. */


  function area($width,$height){

  	$area = $width * $height;	
  	echo "A rectangle of length $height and width $width has an area of $area.";


  }
  area(4,5);

  echo "<br>";
/*
For this PHP exercise, first create an array called $months. Use the names of the months as keys, and the number of days for each month as values. For February, use the following for your value: "28 days".

Make a function that will output all the months with the aprropriate days number and echo that like a sentenčoohačoohčoooooačhohhooondndoood no hooohnhh n  hohohoohhoooohn
*/

$months = [
'january' => 31,
'february' => 28,
'march' => 31,
'april' => 30,
'may' => 31,
'june' => 30,
'july' => 31,
'august' => 31,
'september' => 30,
'october' => 31,
'november' => 30,
'december' => 31
] ;

function months($months){
$all = "";
	foreach ($months as $month => $days) {
		if ($month == 'february'){
			$days .= " days or 29 days.";
		} else {
			$days .= " days.";
		}

		$all .= ucfirst($month) . ' has ' . $days . '<br>';
	
	}
	return $all;
}

echo months($months);


