<form action="" method="post" enctype="multipart/form-data">
	<label for="file">File To Check! </label>
	<input type="file" name="file" id="file" onchange="findMime()">
	<input type="submit" name="submit" value="Check File">
</form>

<div class="feedback">

<ul>
	<li id="type"></li>
</ul>

</div>