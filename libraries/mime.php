<?php
class File {

	public $output;
	public $file;

	public function __construct()
	{

	}


	public static function getFile($file)
	{

		//$file = $_FILES['file'];
		return $file;

	}

	public static function getFileName($file)
	{

		$file = File::getFile($file['name']);
		return $file;

	}

	public static function getFileType($file)
	{

		$file = File::getFile($file['type']);
		return $file;

	}

	public static function getFileSize($file)
	{

		$file = File::getFile($file['size']);
		return $file;

	}

	public static function getFileTemp($file)
	{

		$file = File::getFile($file['tmp_name']);
		return $file;

	}

	public static function getFileError($file)
	{

		$file = File::getFile($file['error']);
		return $file;

	}

}
