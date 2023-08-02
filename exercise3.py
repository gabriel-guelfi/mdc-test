# Take an input from the command line and checks if it's an integer value. Repeat the operation if it is not.
def readInt(message):
    # Read the input from user:
    num = input(message)

    # Check if the inserted value is an integer, if not, repeat the operation:
    if not num.isnumeric():
        print("Error: You can only type integer values.")
        print("Please repeat the operation.")
        return readInt(message)

    # Return the value read from user's input:
    return int(num)

 # Find the factorial number of a given number.
def findFactorial(num):
    # Multiply all integers less than or equals to a given number:
    result = 1
    for factor in range(1, (num + 1)):
        result = result * factor

    return result

# Greets the user, shows user guides, prompts the user for input, then print the result.


def init():
    # Greetings:
    print("Welcome to the factorial calculator!")
    # User guides:
    print("You may type a number and I'll show you its factorial.")

    # Prompt the user for inputs:
    num = readInt("Please, insert the number:")

    # Print the result:
    print('The factorial of "' + str(num) + '" is: ' + str(findFactorial(num)))


# init the application:
init()
