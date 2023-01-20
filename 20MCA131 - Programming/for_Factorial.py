num = int(input("Enter a Number: "))

fac = 1

for i in range(1, num+1):
    fac = fac*i

print("Factorial of ", num, " is : ", fac)
