string=str(input("Enter the string : "))
a={}
print(string)
s=string.split()

for i in s:
    if i in a:
        a[i]=a[i]+1
    else:
        a[i]=1
for m,n in a.items():
    print(m,"occurs ",n," times")
