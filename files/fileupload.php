<?php 

echo md5("neka sifra");
/*

array (size=1)
  'something' => 
    array (size=5)
      'name' => string 'hugh-illustration-071.png' (length=25)
      'type' => string 'image/png' (length=9)
      'tmp_name' => string 'D:\wamp\tmp\phpD06C.tmp' (length=23)
      'error' => int 0
      'size' => int 281658




      */

define('MAX_FILE_SIZE' , 200000);

function uploading(){
 
	if ($_FILES['something']['size'] > MAX_FILE_SIZE) return;

    $dir = getcwd();
    $path = $dir . "/uploads";
    $tmp_file = $_FILES['something']['tmp_name']; //D:\wamp\tmp\phpD06C.tmp
    $filename = str_replace(" ", "_", $_FILES['something']['name']);
    $destination = $path . "/" . time() . "_" . $filename;
    move_uploaded_file($tmp_file, $destination);
}


 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	
	<form action="" method="POST" enctype="multipart/form-data">
		
		<label for="file">Upload your file: </label><input type="file" name="something" id="file"><br>
		<label for="name">Your name: </label><input type="text" name="name" id="text">
	<button type="submit">Send</button>
	</form>
</body>
</html>