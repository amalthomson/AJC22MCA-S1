x=int(input("Enter the size of list 1 : "))
lx=[]
for i in range (0,x):
    a=int(input("Enter Number : "))
    lx.append(a)
print("\nList 1 is ;", lx)

p=[i for i in lx if i>0]

print("\nList of Positive numbers is :", p)
