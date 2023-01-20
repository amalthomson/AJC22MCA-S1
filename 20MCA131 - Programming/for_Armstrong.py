num = int(input("Enter a Number : "))
order = len(str(num))
temp = num
sum = 0
stnum=str(num)
for i in stnum:
    digit =temp%10
    sum += digit **order
    temp = temp//10
if(sum==num):
    print("",num,"is an Armstrong number")
else:
    print("",num,"is not an Armstrong number")
