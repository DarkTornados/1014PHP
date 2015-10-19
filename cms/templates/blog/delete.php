<?php 
	$sql = "DELETE FROM posts WHERE id = '" . $_GET['id'] . "'";
	mysql_query($sql);

	header('Location: ?action=read');
 ?>