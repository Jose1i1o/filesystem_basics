<?php

/* Skipping directory entries
* if(boolean) { continue; } -> jump to next iteration
*/

$dirpath = __DIR__;
$handle = opendir($dirpath);
if ($handle) {
    while (false !== ($entry = readdir($handle))) {
        // skip . and .. files
        if ($entry == '.' || $entry == '..') {
            continue;
        } // skip all files that start with a dot at the beggining
        if (stripos($entry, '.') === 0) {
            continue;
        } // skip all the directories
        if (is_dir($dirpath . '/' . $entry)) {
            continue;
        }
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
