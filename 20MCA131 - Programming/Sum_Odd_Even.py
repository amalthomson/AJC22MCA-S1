n=int(input("Enter the Number : "))
sodd=0
seven=0
i=1
while(i<=n):
    if(i%2!=0):
        sodd=sodd+i
    else:
        seven=seven+i
    i=i+1
print("Sum of Odd Numbers : ", sodd)
print("Sum of Even Numbers : ", seven)
