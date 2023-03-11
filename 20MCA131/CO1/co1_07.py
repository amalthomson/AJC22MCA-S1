x=int(input("Enter the size of list 1 : "))
lx=[]
for i in range (0,x):
    a=int(input("Enter Number : "))
    lx.append(a)
print("\nList 1 is ;", lx)
y=int(input("\nEnter the size of list 2 : "))

ly=[]
for i in range (0,y):
    b=int(input("Enter Number : "))
    ly.append(b)
print("\nList 2 is : ", ly)



if (len(lx)==len(ly)):
    print("\nThe size of both list are equal")
else:
    print("\nThe size of both list are not equal")
if (sum(lx)==sum(ly)):
    print("\nSum of both list is equal")
else:
    print("\nSum of both list are not equal")
print("\nCommon elements in both list are : ")
for i in lx:
    for j in ly:
        if(i==j):
            print(i)




