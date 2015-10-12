<?php 

$now = time();

//echo $now;

//$jb = mktime(16, 0, 0, 8, 4, 1994);
$jb = strtotime("24th August 2015, 14:37 Friday");

//echo $now . " : " . $jb;
$diff = $now - $jb;

///echo $diff / 60 / 60 / 24 / 7;

// $end = strtotime("1st January 2016");
// for ($i=0; $i < 70 ; $i++) { 
	
// 	$start = strtotime("1st January 2015 +$i Week Wednesday");
// 	if ($start > $end ) {
// 		break;
// 	}
// 	echo date("m/d/Y", $start) . "<br>";
// }

$now_array = getdate($now);

var_dump($now_array['weekday']);