"""A simple calculator"""

#getting the input from user for calculations
num1=int(input("enter num1\n"))
num2=int(input("enter num2\n"))

#defining condition
print("choose the operation to perform")
o=int(input("1.add, 2.sub, 3.mul, 4.div\n"))

#check conditions and print result
if(o==1):
    print(num1+num2)
elif(o==2):
    print(num1-num2)
elif(o==3):
    print(num1*num2)
elif(o==4):
    print(num1/num2)
else:
    print("invalid input")






