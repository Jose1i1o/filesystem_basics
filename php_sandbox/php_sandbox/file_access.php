<?php
/*
* File access mode. Use the following
* w / Open file for writing only.
* r+ / open an existing file for reading and writing.
* r / Open an existing file for reading only.
* a / appending data to the end of a file.
* 
*/

$filepath = __DIR__ . '/assets/lorem_ipsum.txt';
$handle = fopen($filepath, 'r');
if ($handle) {
    // ...
    echo 'File opened successfully';
    fclose($handle);
} else {
    echo 'File could not be opened';
}
