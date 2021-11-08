
<?php
/*
* Cannot delete open files because they are still in use.
* Need write permissions on the directory containing the file.
* $unlink($filepath)
*/

$filepath = __DIR__ . '/delete_me.txt';

file_put_contents($filepath, 'delete me');

echo file_exists($filepath) ? 'Haha! Your life is now mineeee. Go get me a sandwich.' : 'Revenge!! I will come back - says the file who is beign dropped to the darkness';
echo "<br />";

unlink($filepath);
echo file_exists($filepath) ? 'I still exist' : 'Revenge!! I will be back - says the file who is being cut into shreds.';
echo "<br />";
