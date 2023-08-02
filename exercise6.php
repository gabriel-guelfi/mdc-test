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
 * Count the number of vowels on a given sentence.
 * 
 * @param string $sentence
 * @return int 
 */
function countVowels(string $sentence)
{
    // Perform a REGEX, gathering all vowels found in an array.
    $matches = [];
    preg_match_all('/[aAeEiIoOuUyYwW]/', $sentence, $matches);

    $matches = $matches[0];

    // Returns the length of the array of vowels:
    return count($matches);
}

/** 
 * Greets the user, prompts the user for input, then print the result.
 * 
 * @return void 
 */
function init()
{
    // Greetings: 
    printLn("Welcome to the vowel counter!");
    printLn();

    // Prompt the user for inputs:
    $sentence = readline("Type a sentence and I'll count the number of vowels in that sentence: ");

    // Count the number of vowels in the sentence provided by the user's input:
    $numVowels = countVowels($sentence);

    // Print out the results:
    printLn("The sentence: \"{$sentence}\" has {$numVowels} vowels.");
}

// Starts the application;
init();
