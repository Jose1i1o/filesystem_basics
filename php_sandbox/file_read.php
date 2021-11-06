<?php
/*
* File access mode. Use the following
* w / Open file for writing only.
* r+ / open an existing file for reading and writing.
* r / Open an existing file for reading only.
* a / appending data to the end of a file.
*
* nl2br() is used to convert new line to <br>, so that it respects the html code
* file_get_contents() is used to read the file and close it.
*/

$filepath = __DIR__ . '/assets/lorem_ipsum.txt';

// This is the long version

// $handle = fopen($filepath, 'r');
// if ($handle) {
//     // $data = fread($handle, 20);
//     $data = fread($handle, filesize($filepath));
//     fclose($handle);
// } else {
//     echo 'File could not be opened';
// }

// echo nl2br($data);  // nl2br() is used to convert new line to <br>

// This is the short version.

$data = file_get_contents($filepath);
echo nl2br($data);
