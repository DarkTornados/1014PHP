<?php 

$db_name = "blog";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";

define('SITE_NAME', "My Coolest Blog");
define('UPLOADS_DIR', getcwd() . '/uploads');


/// DON'T EDIT BELLOW THIS LINE
error_reporting(2);
$conn = mysql_connect($db_host, $db_user, $db_pass);

if (!$conn) {
	echo "Connection to database not successful.";
	die;
}

$db_select = mysql_select_db($db_name);

if (!$db_select) {
	die("Database not found.");
}
