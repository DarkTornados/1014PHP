<?php


function create_new_post() {
	$title = mysql_real_escape_string($_POST['title']);
	$content = mysql_real_escape_string($_POST['content']);

	if ($_FILES['image']['error'] != 4) {

		$image = upload_image();
	}
	$date = time();
	$id_user = $_POST['id_user'];
	$sql = "INSERT INTO posts SET title='$title', content = '$content', image = '$image', date = '$date', id_user = '$id_user'";
	mysql_query($sql);
}

function upload_image() {
	$file = str_replace(" ", "_", $_FILES['image']['name']); //here I remove spaces
	$file = time() . "_" . $file ; // here I add timestamp
	move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS_DIR . "/" . $file);
	return $file;
}

function get_all_authors_dropdown() {
	$sql = "SELECT * FROM users";
    $result = mysql_query($sql);

    while($row = mysql_fetch_assoc($result)) {
        ?>
          <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?> <?php echo $row['lastname'] ?></option>

        <?php
    }
}