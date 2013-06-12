#fileDetect
Test project for MIME content detection
====

### Project Layout
Project is laid out as follows :
- css - for any CSS files (not a lot here since this is a test project for the development of a class library and not really anything else)
- libraries - Holds any PHP class files related to the project. 'mime.php' is the primary library in development.
- partials - contains html file partials
- root - index.php file and readme. Develop branch README will be used for notes and general thoughts throughout the project life cycle. Master README will be used, eventually, for general how-to's and stuff like that.

## Usage
====
1) To retrieve a files MIME content type, just use the static method,
``
File::getFileType($file);
``
You could simply assign it to a variable and then echo that out, such as -
``
$type = File::getFileType($file);
echo $type;
``

