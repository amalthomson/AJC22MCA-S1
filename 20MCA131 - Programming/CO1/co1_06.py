x=int(input("enter the number of strings : "))
a=[]
flag=0
print("Enter the first names :")
for i in range(0,x):
    s=input()
    a.append(s)
print(a)
for i in a:
    for j in i:
        if(j=="a"):
            flag=flag+1
print("the number of occurences of a=",flag)
