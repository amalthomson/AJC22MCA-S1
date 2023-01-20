"""Program to find check the number is prime or not"""

# Input from the user
num=int(input('Please enter a number :'))

i = 2
temp = 0

while (i<num):
    if num%i == 0:
        temp = 1
        print (num,"is NOT a prime number!");
    i = i + 1

if temp == 0:
    print (num,"is a prime number!");
