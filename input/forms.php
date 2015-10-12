<!-- <label for="lastname">Lastname:</label> <input type="text" id="lastname" name="lastname">
<br>
Gender Male <input type="radio" id="gender" name="gender">  Female <input type="radio" id="gender" name="gender">
<br>
<input type="button" value="Submit" id="submit">


<script>
	$('#submit').on('click', function(){
		var lastname = $('#lastname').val();
		
	});

</script> -->
<?php 

	var_dump($_POST);
 ?>

<form action="" method="POST">
	 <label for="one1">1</label><input type="checkbox" name="one[1]" id="one1">
	 <label for="one2">2</label><input type="checkbox" name="one[2]" id="one2">
	 <label for="one3">3</label><input type="checkbox" name="one['three']" id="one3">
	<input type="submit" value="Submit">
	<input type="reset" value="reset">

</form>