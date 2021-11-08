<?php

// Filesystem basics ($filepath, $dirpath, file_exists, is_file)

$filepath = '/Applications/XAMPP/xamppfiles/htdocs/php_linkedIn_training_basics/php_sandbox/file_basics.php';
$dirpath = '/Applications/XAMPP/xamppfiles/htdocs/php_linkedIn_training_basics/php_sandbox/';

echo file_exists($filepath) ? 'File exists' : 'File does not exist';
echo '<br />';

echo file_exists($dirpath) ? 'Directory exists' : 'Directory does not exist';
echo '<br />';

echo is_file($filepath) ? 'It is a file' : 'It is not a file';
echo '<br />';

echo is_file($dirpath) ? 'It is a file' : 'It is not a file';
echo '<br />';

echo file_exists($filepath) ? 'It is a directory' : 'It is not a directory';
echo '<br />';

echo file_exists($dirpath) ? 'It is a directory' : 'It is not a directory';
echo '<br />';
