<?php
/*
* feof - end of file
* explode - split string
*/

$filepath = __DIR__ . '/assets/us_presidents.csv';

$data = '';

$handle = fopen($filepath, 'r');
if ($handle) {
    // $data = fgets($handle); // skip first line and read next lines
    // $data .= fgets($handle); // skip first line and read next lines
    // $data .= fgets($handle); // skip first line and read next lines
    // $data .= fgets($handle); // skip first line and read next lines
    while (!feof($handle)) {
        // append, examine, parse, etc.
        // $data .= fgets($handle); // use it to read the whole file - "end-of-life" => EOF
        $row = fgets($handle);
        $array = explode(',', $row);
        echo $array[1] . ' - ' . $array[2] . '<br />';
    }
    fclose($handle);
} else {
    echo 'File could not be opened';
}

echo nl2br($data);
