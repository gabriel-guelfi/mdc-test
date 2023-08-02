<?php

/** 
 * Outputs a given $data followed by an end-of-line.
 * 
 * @param string $data
 * @return void 
 */
function printLn($data = '')
{
    echo $data;
    echo PHP_EOL;
}

/** 
 * Greets the user, shows user guides, prompts the user for input, then print the result.
 * 
 * @return void 
 */
function init()
{
    // Greetings: 
    printLn("Welcome to the palindrome checker!");
    // User guide: 
    printLn("A palindrome is a word that reads the same backwards and forwards.");
    printLn();

    // Prompt the user for inputs:
    $word = readline("Type a word and I'll tell you if it is a palindrome or not: ");

    // Print the result:
    printLn($word === strrev($word) ? "Yes, it is a palindrome." : "No, this word isn't a palindrome.");
}

// Init the application:
init();
