<?php
/*
* Unix and macOS: "Line one\nLine two\nLine three"
* Windows: "Line one\r\nLine two\r\nLine three"
* Unix and macOS new lines are "\n"
* Windows new lines are "\r\n"
* double quotes matter
*/

$filepath = __DIR__ . '/sample_file.txt';

$handle = fopen($filepath, 'w'); // overwrite existing file
if ($handle) {
    fwrite($handle, 'Hello World');
    fwrite($handle, '123456789');
    fclose($handle);
} else {
    echo 'Error opening file';
}


$filepath = __DIR__ . '/sample_file2.txt';
$data = "Here lies\na mistery\nto be resolved";

file_put_contents($filepath, $data);
