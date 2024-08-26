<?php


// A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.

// A regular expression can be a single character, or a more complicated pattern.

// Regular expressions can be used to perform all types of text search and text replace operations.


// Syntax

// In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.

$exp = "/w3schools/i";

// In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.

// PHP provides variety of regex functions. Common ones are below

// preg_match()	Returns 1 if the pattern was found in the string and 0 if not
// preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
// preg_replace()	Returns a new string where matched patterns have been replaced with another string



// Learn more - https://www.w3schools.com/php/php_regex.asp
// Complete PHP Regex - https://www.w3schools.com/php/php_ref_regex.asp
?>