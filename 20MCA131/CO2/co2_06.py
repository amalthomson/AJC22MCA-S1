n=str(input("Enter the String: "))
s= {}
for i in n:
    if i in s:
        s[i]= s[i]+1
    else:
        s[i]=1
for m,s in s.items():
    print(m ,"=",s)
