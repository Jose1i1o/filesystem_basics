<?php

$filepath = __DIR__ . '/uploads/sonnet.txt';

if (file_exists($filepath)) {
    chmod($filepath, 0777); // 0777 rwx, 0766 rw, 0764 r
}
