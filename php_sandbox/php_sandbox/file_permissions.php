<?php

// This section contains only comments about how to use the terminal to modify user, group and other permissions.
/*
* sudo chmod ugo=rwx file.txt => To change file permissions; => This only change the file permissions of the file.txt file.
* chmod -R ugo=rwx file.txt => To change file permissions recursively on all the files in the directory.
* r = read; w = write; x = execute; u = user; g = group; o = other;
* You can drop any of those to change permissions
* Use ls -la +dir to see permissions
*
* sudo chown user:group file.txt => To change file owner
*/
