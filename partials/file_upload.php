<form action="" method="post" enctype="multipart/form-data">
	<label for="file">File To Check! </label>
	<input type="file" name="file" id="file" onchange="findMime()">
	<input type="submit" name="submit" value="Check File">
</form>

<div class="feedback">

<ul>
	<li id="name"></li>
	<li id="type"></li>
	<li id="size"></li>
</ul>

</div>