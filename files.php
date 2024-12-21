<?php
    //file system - part of core php
     $content = readfile('lorem.txt');
    
    if(file_exists('lorem.txt')){
        // echo readfile('lorem.txt');
        echo $content.'<br>';
    } else {
        echo 'file not found';
    }

    copy('lorem.txt', 'lorem_copy.txt');

    //rename('lorem_copy.txt', 'lorem.txt');

    echo filesize('lorem_copy.txt');






?>