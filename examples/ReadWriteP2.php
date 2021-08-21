<?php
// http://localhost/Tuts/examples/ReadWriteP2.php
// //file system - Part 2

// // more @: https://www.w3schools.com/php/func_filesystem_fopen.asp
// // more @: https://www.w3schools.com/php/php_file_open.asp


$file = 'p1.txt';
// //----------------------------------------------Reading a file
// //open a file for reading
// $handle = fopen($file, 'r');

// //read the file (all of the file)
// echo fread($handle, filesize($file)); 

// //read the file (121 characters only)
// echo fread($handle,121);


// //read a single line
// echo fgets($handle);
// echo fgets($handle);

// //read a single character
// echo fgetc($handle);
// echo fgetc($handle);
// //----------------------------------------------Writing into a file
// //writing to a file
// $handle = fopen($file, 'r+');
// //write a new line and override the first line and switch it to the sentence given
// fwrite($handle,"\nEverything popular is wrong.");



// //writing to a file
// $handle = fopen($file, 'a+');
// //write a new line and add the sentence given in the file
// fwrite($handle,"\nEverything popular is wrong.");
//fclose($handle);


// //delete a file
// unlink('p1.txt');