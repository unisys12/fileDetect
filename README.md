#fileDetect
Test project for MIME content detection
====

### Project Layout
Project is laid out as follows :
- css - for any CSS files (not a lot here since this is a test project for the development of a class library and not really anything else)
- js - contains mime.js, which uses the HTML5 FileAPI to get the file type, size and name
- libraries - Holds any PHP class files related to the project. 'mime.php' is the primary library in development.
- partials - contains html file partials
- root - index.php file and readme. Develop branch README will be used for notes and general thoughts throughout the project life cycle. Master README will be used, eventually, for general how-to's and stuff like that.

## Useage
====
1. Add the script to your project
``
<script src="js/mime.js"></script>
``

2. Now just add a element with an ID of what you want to display
``
<li id="type"></li>
``