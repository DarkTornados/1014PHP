<?php 
error_reporting(2);

if ($_POST) {
	mail($_POST['email'], "some subject", $_POST['message']);
}
 ?>