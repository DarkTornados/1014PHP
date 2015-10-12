<?php 

/* EXCERSIZE 

CREATE A FOLDER WITH index.php and one work.txt file and open in Sublime

and then through the code do the following 

1. create a folder SUBFOLDER
2. copy work.txt from root to SUBFOLDER
3. create a subfolder inside SUBFOLDER called TEST
4. copy work.txt to TEST as well but change its name to work2.txt
5. delete all files and folders from SUBFOLDER


*/


$dir = getcwd();
// error_reporting(0);
// /*$fajl = fopen('text.txt', 'a');

// //$size = filesize("text.txt");
// //$procitano = fread($fajl, $size);

// fwrite($fajl, "DODANO");

// fclose($fajl);

// //var_dump($procitano);
// */

// //$podaci = file_get_contents("text.txt");
// // $podaci = file_get_contents("text.txt");


// // file_put_contents('text.tx t', $podaci . "Ovo dodajemo");
// $result = rmdir('something2');

// if (!$result) {

// }

$dirres = opendir('something2');



// for($i = 0; $i < 100; $i++){
// 	echo readdir($dirres) . "<br>";	
// }

// foreach ($variable as $key => $value) {
// 	# code...
// }

while($item = readdir($dirres)) {

 if ($item != '.' && $item != ".." && !is_file('something2/' . $item)) {
	echo $item . "<br>";
 }
}

closedir($dirres);
var_dump($dirres);


 ?>