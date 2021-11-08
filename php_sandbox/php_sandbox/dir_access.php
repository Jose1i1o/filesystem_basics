<?php

/* 
* opendir($dirpath) -> opens up a directory and returns a directory handler.
* readdir($dirpath) -> reads information from the directory.
* closedir($dirpath) -> closes the open directory.
* scandir($dirpath) -> reads information from the directory and returns an array.
*/

$dirpath = __DIR__;
$handle = opendir($dirpath);
if ($handle) {
    // First method. Will return one by one entry in the directory.
    // echo readdir($handle) . "<br>";
    // echo readdir($handle) . "<br>";
    // echo readdir($handle) . "<br>";
    // echo readdir($handle) . "<br>";
    // echo readdir($handle) . "<br>";
    while (false !== ($entry = readdir($handle))) {
        echo $entry . "<br>";
    }
    // ...
    // echo 'Directory opened successfully';
    closedir($handle);
} else {
    echo 'Directory could not be opened';
}

echo '<br />';

$array = scandir($dirpath);
echo $array[3] . '<br />';
