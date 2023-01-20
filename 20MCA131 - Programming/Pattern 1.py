row=int(input("Enter the number of ROWS : "))

for i in range(1, row+1):
    for j in range(1, i+1):
        sq=i*j
        print(i*j,end='')
    print()
