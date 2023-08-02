# Check if a given number is a prime number
# return True if it is or, otherwise, False.
def isPrime(num):
    # check if the given number is divisible for any other number between 2 and itself:
    for i in range(2, num):
        if num % i == 0:
            return False

    return True

# Find the first ten prime numbers, then print them in the CLI:
def showTenFirstPrimeNumbers():
    primeNums = []

    # starting on "2", check if the number is a prime number, then increases it by 1.
    # each prime number found is stored in the list, when list reaches 10 items, stop the loop.
    num = 2
    while len(primeNums) < 10:
        if isPrime(num):
            primeNums.append(str(num))
        num = num + 1

    # outputs the 10 prime numbers found:
    print("The first 10 prime numbers are:")
    print(', '.join(primeNums))

# start the application:
showTenFirstPrimeNumbers()
