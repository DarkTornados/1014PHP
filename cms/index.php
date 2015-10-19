<?php 
require_once('config.php');
require_once('functions.php');
include_once('templates/header.php');

$action = $_GET['action'];
if (!$action) $action = "read";

include("templates/blog/$action.php");
?>


<?php 
include_once('templates/footer.php');
