n=int(input("Enter the limit : "))

for i in range(0,n):
    for j in range(0, i+1):
        print("*", end="")
    print("")
for i in range(0,n):
    for j in range(0,j):
        print("*", end="")
    n=n-1
    print(" ")
