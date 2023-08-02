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
 * Take an input from the command line and checks if it's a numeric value. Repeat the operation if it is not.
 * 
 * @return string 
 */
function readNumber($message)
{
    // Read the input from user:
    $number = readLine($message);

    // Check if the inserted value is a number, if not, repeat the operation:
    if (!is_numeric($number)) {
        printLn('Error: You can only type a numeric value.');
        printLn("Plase, repeat the operation.");
        return readNumber($message);
    }

    // Return the value read from user's input:
    return $number;
}

/** 
 * Find the table of a given integer number.
 * 
 * @param int $number
 * @return array 
 */
function findTable(int $number)
{
    // Multiply the given number for 1 to 10. Store the results in an array:
    $table = [];
    for ($factor = 1; $factor <= 10; $factor++) {
        $table[$factor] = $factor * $number;
    }

    return $table;
}

/** 
 * Greets the user, shows user guides, prompts the user for input, then print the result.
 * 
 * @return void 
 */
function init()
{
    // Greetings: 
    printLn("Welcome to the table calculator!");
    // User guide: 
    printLn("The table of a number is a list of all the results of multiplying this number by 1 to 10.");
    printLn();

    // Prompt the user for inputs:
    $number = readNumber("Type a number and I'll show you this number's table: ");

    // Find the table of the number provided by the user's input:
    $table = findTable($number);

    // Prints out each item found in the number's table:
    printLn();
    printLn("The table of \"{$number}\" is:");
    foreach ($table as $factor => $result) {
        printLn("{$number} X {$factor} = {$result}");
    }
}

// Init the application:
init();
