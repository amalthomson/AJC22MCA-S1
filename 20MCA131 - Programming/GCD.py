num1=int(input("Enter Number 1 : "))
num2=int(input("Enter Number 2 : "))
i=1

while(i<=num1 and i<=num2):
    if(num1 % i!=0 and num2 % i!=0):
        gcd=1
    i=i+1
print("The GCD of", num1, "and", num2, "is : ", gcd)

