"""A program to find the volume of a Cone"""

#geting requried input from user for the calculations

radius=float(input("enter the radius of the cone :"))
height=float(input("enter the height of the cone :"))

#calculations
vol=(3.14*radius*radius*height)/3  #Volume = pi multiplied by height and square of radius divided by 3

#printing the result
print("The volume of the cone is :", vol)
