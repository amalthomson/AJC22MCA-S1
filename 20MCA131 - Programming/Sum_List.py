x=int(input("Enter the size of list 1 : "))
lx=[]
for i in range (0,x):
    a=int(input("Enter Number : "))
    lx.append(a)
print("\nList 1 is ;", lx)

print("\nThe of elements of List is : ", sum(lx))
