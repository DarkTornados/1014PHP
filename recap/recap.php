<?php 
// 1. make an array with the days of the week
// 2. output them on the screen by using loop
// 3. make one more loop so that it displays only every second day

$days = [
'Monday', 
'Tuesday',
'Wednesday',
'Thursday',
'Friday',
'Saturday',
'Sunday'
];


// foreach ($days as $key => $day) {
// 	echo $day . " <br>";
// }


foreach ($days as $key => $day) {

	if ($key % 2 > 0 ) {
		echo $key . " "; 
		echo $day . " <br>";
	}
}

 ?>
