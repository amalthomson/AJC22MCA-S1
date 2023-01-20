"""A Program to find the area and perimeter of a circle"""

#geting requried input from user for the calculations

radius=int(input("Enter the radius of Circle :"))

#calculations

area=3.14*radius*radius  #Area = pi multiplied by square of radius
perimeter=2*3.14*radius  #Circumference = 2 times pi multiplied by radius

#printing the result

print("The Area of circle is :", area)
print("The Circumference of circle is :", perimeter)
