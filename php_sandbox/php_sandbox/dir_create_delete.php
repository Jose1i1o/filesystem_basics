<?php

/* Creating and deleting directories
* mkdir($dirpath)   - creates a directory
* rmdir($dirpath)   // removes empty directory. It has to be empty and not open.
*/

// Creates directory
if (!file_exists('new_dir')) {
    mkdir('new_dir');
} else {
    echo 'Directory already exists';
}

// Removes directory
if (file_exists('new_dir')) {
    rmdir('new_dir');
} else {
    echo 'Directory couldn´t be found';
}
