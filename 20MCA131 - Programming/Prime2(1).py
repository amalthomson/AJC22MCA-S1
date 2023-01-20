num=int(input("Enter a Number : "))

i=2

while (i<=num):
    if(num==2):
        print(num, "is PRIME")
        break
    elif (num%i==0):
        print(num, "is Not PRIME")
        break
    else:
        print(num, "is PRIME")
        break
