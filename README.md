fileDetect
==========

Test project to accurately detect MIME file type info. Nothing special to see here, so move along people!

### Project Structure for PHP examples
- partials - Contains HTML partials for example page
- libraries - Contains PHP Class Files
- css - Contains CSS files... of course!

### Project Structure for JavaScript examples
- partials - Contains HTML partials
- js - Contains JavaScript files. Takes the place of the libraries folder above. Naming habits die hard!
- css - Contains CSS files... still!

## Project Purpose

I have taken on the self imposed task of learning all that I can about file type detection in modern web development. This started out with helping out on another project and has led to a much longer journey into the depths of this topic. I have read a ton, got very frustrated and got back on board. Learning and understanding this process has truly become a sideline passion for me. None of the proposed methods that I currently have up and working, are not full proof. In other words, they do not detect MIME with 100% accuracy. This, in turn, is the nature of the problem. But none the less, I feel as though they should be documented here so that others might contribute to these examples which works for them and show best practices they have developed over the years. With these additions, we should be able to distill this down into a framework of best practices. But even better, possibly develop better methods in content type detection.

## Repo Structure

The examples in each branch represent very basic examples of how to retrieve the MIME content info from a file using either a different language or technique, while trying to keep the initial project structure the same.

- Master - Contains a very simple example of using the PHP global variable $_FILES[]. This was the first example hence it is the master repo. I will soon be moving this off to a separate repo and creating a project page that will include examples and further explanations.

- develop - Currently contains project using a little better way of obtaining MIME content type using PHP with fopen().

- MIMEbyFileAPI - Contains a very simple JavaScript example of retrieving file size, type and name using the HTML5 File API.

## A Little About Me

Now, bear in mind that I do not do this for a living. I simply love web development and do this as a hobby. Sure, I would love to do this for a living, but... not there yet!
