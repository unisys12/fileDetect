<?php require('libraries/mime.php'); ?>

<form action="" method="post" enctype="multipart/form-data">
	<label for="name">File To Check! </label>
	<input type="file" name="file" id="name">
	<input type="submit" name="submit" value="Check File">
</form>

<div class="feedback">

	<?php

	if(isset($_POST['submit']))
	{
		$file = $_FILES['file'];

		echo '<li>' . File::getFile($file['name']) . '</li>';
		echo '<li>' . File::getFile($file['type']) . '</li>';
		echo '<li>' . File::getFile($file['size']) . 'kb </li>';
	}
	else
	{
		echo "No file selected / General error";
	}

	?>

</div>