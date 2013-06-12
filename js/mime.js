function findMime(){

	var file = document.getElementById('file').files[0];
	var type = file.type;
	var size = file.size;
	var name = file.name;

	document.getElementById('type').innerHTML = type;
	document.getElementById('size').innerHTML = size + ' - kb';
	document.getElementById('name').innerHTML = name;

}