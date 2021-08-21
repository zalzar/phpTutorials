<?php
// http://localhost/Tuts/examples/ReadWriteP1.php
//file system - Part 1


    // $quotes= readfile('p1.txt');
    // echo $quotes;


    $file = 'p1.txt';
    if (file_exists($file)) {
        //read file
        echo readfile($file).'<br />';;

        //copy a file
        copy($file,'quotes.txt');

        //absolute path
        echo realpath($file).'<br />';

        //file size
        echo filesize($file).'<br />';;

        //rename file
        //rename($file,'test.txt');

    }else {
        echo 'File does not exist';
    }
    //make directory
    mkdir('Quotes');