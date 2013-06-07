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
		// Check if the file is an image from the global array
		if($file['type'] == 'image/jpg' || 'image/png' || 'image/gif'){

			//If so, check the file from the servers temp location.
			$tmp = File::getFileTemp($file);
			$file = getimagesize($tmp);

			// display the filetype returned from getimagesize()
			return $file['mime'];

		}	else {

			// Display error msg since the file was not an image.
			// For some reason, upon failure, message is not returning
			return "The file you selected is not a image!";
		}

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
