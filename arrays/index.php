<?php 
//two ways of writing
$something = ['one', 'two', 'three'];
$something = array('one', 'two', 'three');

// values can be assigned later

$something = array();
//var_dump($something);


$another = ['whatever', 10, array('asdasd', 'dsad')];
$something = ['some text', 1.35, 30, $another];

//var_dump( $something[3] );

// referencing array values & changing

$something[4] = "Something added";
$something[0] = "other text";
//var_dump($something);

$cars = ['mazda', 'bmw', 'audi', 'ford'];

foreach ($cars as $key => $car) {
	echo $car;
	echo "<br>";
}
echo "the number of the elements is: " . count($cars) . "<br>";

// for the sake of lecture, other less convenient way
for ($i = 0; $i < count($cars); $i++ ) {
	echo $cars[$i];
	echo "<br>";
}


array_push($cars, 'fiat', 'toyota'); // add to the end
array_pop($cars); // remove last element



array_unshift($cars, 'cadilac', 'lamborgini'); // add to beggining 
array_shift($cars); // remove first element

//var_dump($cars);

array_splice($cars, 1, 2, 'something'); // swiss army knife

//var_dump($cars);


/*
* ASOCIATIVE ARRAYS
*/

$user = array(
	'name' => 'John',
	'lastname' => 'Doe',
	'email' => 'john@gmail.com',
	'age' => 30,
	//10, 30, // it is possible to combine types of arrays
	'something' => 'red',
	'some_array' => array(
			'one' => 1, 
			'two' => 2
			)
	);

$user2 = ['name' => 'Jane', 'lastname' => 'Doe', 'email' => 'jane@gmail.com', 'age' => 25];

$user['password'] = "secret";
$user['age'] = 40;

unset($user2['email']); //unset - delete the variable or array element

var_dump(	$user['some_array']['two']		);

// foreach ($user as $key => $data) {
// 	echo $data . "<br>";
// }
 ?>