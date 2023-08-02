# Check if a given value is a number (int or float). Return True on success or False, otherwise.
def is_number(s):
    try:
        float(s)
        return True
    except ValueError:
        return False

# Take an input from the command line and checks if it's an numeric value. Repeat the operation if it is not.
def readNumber(message):
    # Read the input from user:
    num = input(message)

    # Check if the inserted value is an integer, if not, repeat the operation:
    if not is_number(num):
        print("Error: You can only type numeric values.")
        print("Please repeat the operation.")
        return readNumber(message)

    # Return the value read from user's input:
    return float(num)

# Finds the profit per month of the investment, then returns the sum of this profit, 
# multiplied by the number of months, and the initial invested amount:
def calcInvestment(initialAmount, interestRate, months):
    profitPerMonth = initialAmount * (interestRate / 100)
    return initialAmount + (profitPerMonth * months)

# Greets the user, shows user guides, prompts the user for input, then print the result.
def init():
    # Greetings:
    print("Welcome to the investment calculator!")
    # User guides:
    print("The purpose of this application is to calculate the final amount of an investment, after a period in months, using the provided interest rate.")
    print("In order to do so, you will: ")
    print("    1. insert the initial amount invested;")
    print("    2. insert the monthly interest rate, in percentage;")
    print("    3. insert how many months would this amount be invested, then press enter;")
    print("I'll show you the resulting amount after the period.")
    print("Let's begin!\n")

    # Prompt the user for inputs:
    initialAmount = readNumber("Insert the initial amount invested: ")
    interestRate = readNumber(
        "Insert the interest rate, per month, in percentage: ")
    months = readNumber(
        "Insert the number of months this capital will be invested: ")

    # Print the result:
    print("The amount of your investment, after " + str(months) + " months, at a rate of " +
          str(interestRate) + "%, will be: $ "+str(calcInvestment(initialAmount, interestRate, months)))

# Init the application:
init()
