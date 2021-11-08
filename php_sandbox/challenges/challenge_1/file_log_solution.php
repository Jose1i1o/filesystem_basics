<?php

/* Challenge: Create a Log File
 *
 * Choose a file path for the log file.
 * Open the file.
 * Handle errors.
 * Append new entries to the end of the file. Don´t overwrite existing entries.
 * Example: 2021-01-01 13:10:03 - Login: jsmith logged in
 * Example time string: strftime('%Y-%m-%d %H:%M:%S');
 *
*/

log_action('test');
log_action('Login', 'jsmith logged in');
log_action('Logout', 'jsmith logged out');

function log_action($action, $message = '')
{
    $filepath = __DIR__ . '/log.txt';

    $handle = fopen($filepath, 'a'); // append only
    if ($handle) {
        $time = strftime('%Y-%m-%d %H:%M:%S');
        fwrite($handle, $time);
        fwrite($handle, ' - ');
        fwrite($handle, strtoupper($action));
        if ($message) {
            fwrite($handle, ': ' . $message);
        }
        fwrite($handle, "\n");
        fclose($handle);
    } else {
        echo 'Error opening file';
    }
}


/* Bonus Challenge
 * Create a PHP page which displays the log file contents.
 * Read log file line by line.
 * Display only lines containing 'Login'.
 *
 */
