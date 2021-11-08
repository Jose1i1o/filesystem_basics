<?php

// Relative path and magic constants __DIR__ and __FILE__

echo __FILE__;
echo '<br />';
echo __DIR__;
echo '<br />';


echo file_exists(__FILE__) ? 'true' : 'false';
echo '<br />';

$filepath = '/' . __DIR__ . '/file_basics.php';

echo file_exists($filepath) ? 'true' : 'false';
echo '<br />';
