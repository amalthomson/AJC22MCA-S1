x=int(input("Enter the size of String : "))

list=[]
temp=0

print("Enter the first name : ")
for i in range(0,x):
    s=input("Enter First Name : ")
    list.append(s)

print(list)

for i in list:
    for j in i:
        if (j=="a"):
            temp=temp+1
print("The Occurance of 'a' is : ", temp)
