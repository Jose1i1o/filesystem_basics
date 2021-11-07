<?php

/* Directory basics
* dirname($dirpath) -> dirname($dirpath) returns the directory name of the given path.
* is_dir($dirpath) -> is_dir($dirpath) returns true if the given path is a directory.
* file_exists($dirpath) -> file_exists($dirpath) returns true if the given path is a file.
* is_writable($dirpath) -> is_writable($dirpath) returns true if the given path is writable.
* getcwd() -> getcwd() returns the current working directory.
chdir($dirpath) -> chdir($dirpath) changes the current working directory to the given path.

* basename($dirpath) -> basename($dirpath) returns the basename of the given path.
* pathinfo($dirpath) -> pathinfo($dirpath) returns an array containing the following:
* dirname, basename, extension, filename
*/

echo getcwd() . "<br>";

chdir('assets');

echo getcwd() . "<br>";

chdir('..');

echo getcwd() . "<br>";

chdir(__DIR__ . '/assets');

echo getcwd() . "<br>";
