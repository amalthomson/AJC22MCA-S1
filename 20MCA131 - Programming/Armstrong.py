"""Program to check the number is Armstrong or not"""

#Enter input
num = int(input("Enter 3-digit number : "))

sum = 0
temp = num

#using loop
while temp > 0:
    digit = temp % 10
    sum = sum+(digit * digit * digit)
    temp = temp//10

if sum==num:
    print(num, 'is an Armstrong number')
else:
    print(num, 'is not an Armstrong number')
