<?php
$days = ['monday', 'tuesday', 'wednesday','thursday','friday','saturday','sunday'];
array_push($days,'noday');
array_unshift($days,'blackday');
array_pop($days);
array_shift($days);
array_splice($days,2,1,'noday');

//dodati noday elemenat na kraj arraya
//push, pop, unshift, shift, splice 
// var_dump($days);


// $var = 8;
// echo 'Value is now' . $var . '<br>';
// $var = $var + 2;
// echo 'Value is now' . $var . '<br>';

 
 $user1 = [
 	'name' => 'John',
 	'lastname'=> 'Doe',
 	'email' => 'john@doe.com'
 	
 ];


 $user2 = [

  'name' => 'Jane',
  'lastname' => 'Darling',
  'email' => 'jane@darling.com'


 ];

  $user3 = [

  'name' => 'Marry',
  'lastname' => 'Darling',
  'email' => 'jane@darling.com'


 ];

$users = [$user1, $user2, $user3];


foreach ($users as $key => $value) {
 	
 	//echo 'Preko glavne $users varijable: ' .  $users[$key]['name'] . "<br>";
 	//echo 'Preko $user varijable: ' .  $user['name'] . "<br>";

	// if($user['lastname'] == "Darling") {
	// 	var_dump($user);
	// }

	
}
// var_dump($users);

// echo $users[1]['lastname'];



//loop trough the $users array and check if user has lastname darling, and if he does, then vardamp that user







 // foreach ($days as $key => $day) {
 // 	echo $day . '<br>';
 // }
 
// var_dump($user);



 /*Arrays allow you to assign multiple values to one variable. For this PHP exercise, 
 write an array variable of weather conditions with the following values: rain, sunshine,
  clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions,
   echo the following statement to the browser:

We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. 
Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.
*/

$weather = [
'rain',
'sunshine',
'clouds',
'hail',
'sleet',
'snow',
'wind'
];


/*echo 'We\'ve seen all kinds of weather this month. At the beginning of the month, we had ' . $weather[5] . ' and '
 . $weather[6] . ' Then came ' . $weather[1] . ' with a few ' . $weather[2] . ' and ' . $weather[0] . '. At least we didn\'t get any '
  . $weather[3] . ' or ' . $weather[4] . ".";*/

/*echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. 
Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].";*/


/*
For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a selection of ten from the largest cities.) Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.

Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array ( asort() ), then print the values to the browser in an unordered list, again using a loop.

Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the browser in an unordered list.

*/



$cities = [
'Tokyo',
'Mexico City',
'New York City',
'Mumbai',
'Seoul',
'Shanghai',
'Lagos',
'Buenos Aires',
'Cairo',
'London'

];

foreach ($cities as $key => $city) {
	if ($key == 0) {
		echo $city;
	} else {
		echo ',' . $city;
	}
}

asort($cities);
//var_dump($cities);
echo "<ul>";
 foreach ($cities as $key => $city) {
 	echo '<li>' . $city .'</li>' ;
   
 	
 }

 echo "</ul>";
 array_push($cities,  'Los Angeles', 'Calcutta', 'Osaka', 'Beijing' );
 asort($cities);
 echo "<ul>";
 foreach ($cities as $key => $city) {
 	echo '<li>' . $city .'</li>' ; 
 	
 }

 echo "</ul>";



?>

<ul>
	<?php foreach ($cities as $city): ?>
		<li class="alskdla" id="dasds"><?php echo $city; ?></li>
	<?php endforeach; ?>

</ul>


<table>
	<tr>
		<th>ID</th>
		<th>City</th>
	</tr>
<?php 

	$counter = 1;

 ?>
<?php foreach ($cities as $key => $city): ?>
	<tr>
		<td><?php echo $counter ?>.</td>
		<td><?php echo $city ?></td>
	</tr>
	<?php $counter++; ?>
<?php endforeach; ?>

</table>
<?php




?>
