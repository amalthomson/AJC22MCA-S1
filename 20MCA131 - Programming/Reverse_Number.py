x=int(input("Enter a number : "))

temp=x
rev=0

while(x>0):
    r=x%10
    rev=(rev*10)+r
    x=x//10
print("The Reverse of the number is : ", rev)

