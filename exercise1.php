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
 * Perform an arithmetic calculation:
 * 
 * @param mixed $firstNumber
 * @param string $operator
 * @param mixed $lastNumber
 * 
 * @return mixed 
 */
function calc($firstNumber, $operator, $lastNumber)
{
    $result = 0;

    // Check for division by zero:
    if ($operator == '/' && $lastNumber == 0) throw new Exception("ERROR: You cannot divide by zero.");

    // Perform the calculation:
    eval('$result = ' . $firstNumber . $operator . $lastNumber . ';');

    return $result;
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

    printLn();

    try {
        // Calculate the result:
        $result = calc($firstNumber, $operator, $lastNumber);

        // Print the result:
        printLn("Your result is: {$result}");
    } catch (Exception $exc) {
        // Print error message:
        printLn($exc->getMessage());
    }
}

// Init the application.
init();
