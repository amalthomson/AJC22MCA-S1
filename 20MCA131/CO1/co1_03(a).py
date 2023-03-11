lx=[]
x=int(input("Enter size of list"))

for i in range(0,x):
    a=int(input("elements"))
    lx.append(a)

print("list is", lx)

p=[i for i in lx if i>0]
print(p)