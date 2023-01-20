x=int(input("Enter the size of List : "))
lx=[]
for i in range (0, x):
    a=int(input("Enter Number : "))
    lx.append(a)
print("\nEntered list is : ", lx)

ly=[]
for i in lx:
    if(i%2==0):
        print(i)
        ly.append(i)
print("\nEven Numbers in the List are : ", ly)
