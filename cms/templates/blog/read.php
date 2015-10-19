<div>
	<a href="?action=create" class="pull-right btn btn-success">Create post</a>

</div>
<table class="table table-striped table-posts">
	<thead>
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Title</th>
			<th>Content</th>
			<th>Author</th>
			<th>Date</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		
		<?php 

		$sql = "SELECT posts.*, users.name, users.lastname FROM posts LEFT JOIN users ON posts.id_user = users.id;";
		$result = mysql_query($sql);

		while($row = mysql_fetch_assoc($result)):

		?>
		
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo display_image($row['image']) ?></td>
			<td><?php echo $row['title'] ?></td>
			<td><?php echo strip_content($row['content']) ?></td>
			<td><?php echo $row['name'] . " " . $row['lastname'] ?></td>
			<td><?php echo date( "d. M. Y", $row['date']) ?></td>
			<td>
				<a href="?action=edit&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-xs">EDIT</a> | <a href="?action=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger btn-xs">DELETE</a>
			</td>
		</tr>

		<?php 
		endwhile;
		 ?>


	</tbody>

</table>

