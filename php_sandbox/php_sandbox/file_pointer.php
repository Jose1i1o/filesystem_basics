<?php

/*
* File Pointer
* Similar to the cursor in a word-processing application, except that it is not limited to a single line.
* Move pointer forward and backward.
* Choose a position to start reading or writing.
* Important difference: pointer overwrites text (10 characters that were before)
* Important: The file pointer must be set before any read or write operation is performed.
* ftell($handle) - Returns the current position of the file read/write pointer
* fseek($handle, $offset) - Sets the file read/write pointer to the given offset
* fgetc($handle) - Reads a single character from the file
*/

$filepath = __DIR__ . '/sonnet.txt';

$handle = fopen($filepath, 'r+'); // read and write. offset at the beggining position
if ($handle) {
    echo ftell($handle) . '<br />'; // 0

    fread($handle, 26); // read the file // 26 characters

    echo ftell($handle) . '<br />';

    fwrite($handle, 'winter'); // 32 characters

    echo ftell($handle) . '<br />';

    fseek($handle, 35); // set the pointer to 35 characters

    echo ftell($handle) . '<br />';

    fwrite($handle, 'eve');

    echo ftell($handle) . '<br />';

    fgetc($handle); // get the next character

    echo ftell($handle) . '<br />';

    fclose($handle);
}
