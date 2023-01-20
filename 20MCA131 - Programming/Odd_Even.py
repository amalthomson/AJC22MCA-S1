n=int(input("Enter the size of list : "))
integers = []

while len(integers) < n:
    user = input('Enter a Number: ')

    integers.append(user)

print(integers)


number = 1
while number <= integers:
    if(number % 2 != 0):
        print("{0}".format(number))
    number = number + 1
