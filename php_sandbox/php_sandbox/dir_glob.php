<?php

/*
* Pattern matching with glob
*
* glob($pattern) -> returns an array of patterns matching the pattern
* There are special characters:
* ? -> Matches any one character.
* * Matches zero or more characters.
* [abc] -> Matches any character in the set.
* [!abc] -> Matches any character NOT in the set
* \ Escapes the patter characters
*/

// looks for file + five characters
$entries = glob("file_?????.php");
foreach ($entries as $entry) {
    echo $entry . "\n";
}

echo "<br />";
echo "<br />";

// looks for file + anything
$entries = glob("file_*.php");
foreach ($entries as $entry) {
    echo $entry, "<br />";
}

echo "<br />";
echo "<br />";

// looks for file or tile + anything
$entries = glob("[ft]ile_*.php");
foreach ($entries as $entry) {
    echo $entry, "<br />";
}

echo "<br />";
echo "<br />";

// looks for all txt files only
$entries = glob("*.txt");
foreach ($entries as $entry) {
    echo $entry, "<br />";
}

echo "<br />";
echo "<br />";

// looks for all txt files in another directory
$entries = glob("*/*.txt");
foreach ($entries as $entry) {
    echo $entry, "<br />";
}
