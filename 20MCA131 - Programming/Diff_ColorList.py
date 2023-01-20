#accepting colors as input from user
a=str(input("Enter Color 1 : "))
b=str(input("Enter Color 2 : "))
c=str(input("Enter Color 3 : "))

d=str(input("Enter Color 4 : "))
e=str(input("Enter Color 5 : "))
f=str(input("Enter Color 6 : "))

#creating list with the user entered colors
x=[a, b, c]
y=[d, e, f]

print("\nColor List 1 is : ", x)
print("\nColor List 2 is : ", y)

#converting list into set to perform operation
m=set(x)
n=set(y)

#calculating the difference using set operations
o=m.difference(y)

#displaying the final result
print("\nDifference of Color List 1 and Color List 2 is : ", o)


