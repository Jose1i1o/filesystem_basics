<?php

/*
* is_readable($filepath) returns true if the file exists and is readable, false otherwise.
* is_writable($filepath) returns true if the file exists and is writable, false otherwise.
* is_executable($filepath) returns true if the file exists and is executable, false otherwise.
*
* filemtime($filepath) returns the time the file was last modified, in seconds since the Unix Epoch.
* filectime($filepath) returns the time the file was last changed, in seconds since the Unix Epoch.
* fileatime($filepath) returns the time the file was last accessed, in seconds since the Unix Epoch.
* pathinfo($filepath) returns an array containing the following keys:
* dirname - The directory name of the file. Or you can also use dirname($filepath)
* basename - The base name of the file. Or you can also use basename($filepath)
* extension - The file extension.
* filename - The file name without the extension.
*
*/

$filepath = __DIR__ . '/sonnet.txt';

echo is_readable($filepath) ? "The file can be read" : "The file can't be read";
echo '<br />';
echo is_writable($filepath) ? "The file can be writen" : "The file can't be writen";
echo '<br />';
echo is_executable($filepath) ? "The file can be executed" : "The file can't be executed";
echo '<br />';

echo filemtime($filepath) . '<br />';
echo strftime('%m/%d/%Y %H:%M', filemtime($filepath)) . '<br />';
echo strftime('%m/%d/%Y %H:%M', filectime($filepath)) . '<br />';
echo strftime('%m/%d/%Y %H:%M', fileatime($filepath)) . '<br />';

$path = pathinfo($filepath);

echo $path['dirname'] . '<br />';
echo $path['basename'] . '<br />';
echo $path['filename'] . '<br />';
echo $path['extension'] . '<br />';

echo '<br />';

echo dirname($filepath) . '<br />';
echo basename($filepath) . '<br />';
