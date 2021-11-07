<?php
/*
* fwrite($handle, $data);
* fwrite($handle, $data, $length);
* fwrite($handle, $data, $length, $offset);
* file_put_contents($filepath, $string); // shortcut for fopen, fwrite, fclose. Overwrites existing file.
* Recommended to use fopen() with A mode instead of file_put_contents() version to not overwrite existing file.
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
$data = 'Here lies a mistery to be resolved';

file_put_contents($filepath, $data);
