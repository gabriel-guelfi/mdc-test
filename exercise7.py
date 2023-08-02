# Check if a given value is a number (int or float). Return True on success or False, otherwise.
def is_number(s):
    try:
        float(s)
        return True
    except ValueError:
        return False

# Take an input from the command line and checks if it's a natural number. Repeat the operation if it is not.
def readNatural(message):
    # Read the input from user:
    num = input(message)

    # Check if the inserted value is an integer, if not, repeat the operation:
    if not is_number(num):
        print("Error: You can only type numeric values.")
        print("Please repeat the operation.")
        return readNatural(message)
    
    # Check if the inserted value is a valid positive number, if not, repeat the operation:
    if float(num) < 0:
        print("Error: You can only type positive values.")
        print("Please repeat the operation.")
        return readNatural(message)

    # Return the value read from user's input:
    return float(num)

# Returns the average value of a list of numbers, rounded by 1 decimal place:
def calcAvg(grades):
    return round(sum(grades) / len(grades), 1)

# Greets the user, shows user guides, prompts the user for input, then print the result.
def init():
    # Greetings:
    print("Welcome to the average calculator!")
    # User guides:
    print("The purpose of this application is to calculate the average of grades in three different subjects.")
    print("In order to do so, you will: ")
    print("    1. insert the grade of the first subject;")
    print("    2. insert the grade of the second subject;")
    print("    3. insert the grade of the third subject, then press enter;")
    print("The average of the 3 grades will be prompted to you.")
    print("Let's begin!\n")

    # Prompt the user for inputs:
    grades = []
    for i in range(1, 4):
        grades.append(readNatural("Insert grade for subject "+str(i)+": "))

    # Print the result:
    print("The average for the three grades inserted is: "+str(calcAvg(grades)))


# Start the application:
init()
