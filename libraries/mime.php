<?php

class File {

	public $file;

	public function __construct()
	{

	}


	public static function getFile($file)
	{

		return $file;

	}

	public static function getFileName($file)
	{

		return $file;

	}

	/**
		* If the global browser says that the file is a image,
		* use the 'getimagesize()' method to determine if it
		* really is. If so, display the file type. If not, display
		* an error.
		*/
	public static function getFileType($file)
	{

		$finfo = new finfo(FILEINFO_MIME); // return mime type ala mimetype extension
		$tmp = File::getFileTemp($file);
		/* get mime-type for a specific file */
		$filename = $tmp;
		$file = $finfo->file($filename);

		return $file;

	}

	// Return the file's size
	public static function getFileSize($file)
	{

		$file = File::getFile($file['size']);
		return $file;

	}

	// Returns the file's tmp path from the server
	public static function getFileTemp($file)
	{

		$file = File::getFile($file['tmp_name']);
		return $file;

	}

	// Returns errors
	public static function getFileError($file)
	{

		$file = File::getFile($file['error']);
		return $file;

	}

}
