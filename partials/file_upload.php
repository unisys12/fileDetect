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

		// echo '<li>' . File::getFile($file) . '</li>';
		// echo '<li>' . File::getFileName($file) . '</li>';
		echo '<li>' . File::getFileType($file) . '</li>';
		// echo '<li>' . File::getFileSize($file) . 'kb </li>';
		// echo var_dump($_FILES);
	}
	else
	{
		echo "No file selected / General error";
	}

	?>

</div>