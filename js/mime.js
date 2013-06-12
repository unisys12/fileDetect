function findMime(){

	var file = document.getElementById('file').files[0];
	var type = file.type;

	document.getElementById('type').innerHTML = type;

}