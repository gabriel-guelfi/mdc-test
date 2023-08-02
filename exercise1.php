<?php

/** 
 * Outputs a given $data followed by an end-of-line.
 * 
 * @param string $data
 * @return void 
 */
function printLn(string $data = '')
{
    echo $data;
    echo PHP_EOL;
}

/** 
 * Take an input from the command line and checks if it's an arithmetic operator. Repeat the operation if it is not.
 * 
 * @return string 
 */
function readOperator()
{
    // Read the input from user:
    $operator = readline("Insert the operator:");

    // Check if the inserted value is an arithmetic operator, if not, repeat the operation:
    if (!in_array($operator, ['+', '-', '*', '/'])) {
        printLn('ERROR: You can only use the following operator: "+", "-", "*" or "/"');
        printLn("Plase, repeat the operation.");
        return readOperator();
    }


    // Return the value read from user's input:
    return $operator;
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
 * Greets the user, shows user guides, prompts the user for input, then print the result.
 * 
 * @return void 
 */
function init()
{
    // Greetings: 
    printLn("Welcome to the Simple Calculator.");
    // User guide: 
    printLn("To perform a calculation:");
    printLn("    1. Insert the first number;");
    printLn("    2. Insert the operator (+, -, * or /);");
    printLn("    3. Insert the second number, then press enter;");
    printLn("Let's begin!");
    printLn();

    // Prompt the user for inputs:
    $firstNumber = readNumber("Insert the first number:");
    $operator = readOperator();
    $lastNumber = readNumber("Insert the second number:");

    // Calculate the result:
    $result = 0;
    eval('$result = ' . $firstNumber . $operator . $lastNumber . ';');

    // Print the result:
    printLn();
    printLn("Your result is: {$result}");
}

// Init the application.
init();
