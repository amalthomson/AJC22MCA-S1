"""A program to caluclate the volume of a cylinder"""

#geting requried input from user for the calculations

radius=float(input("enter the radius of the cylinder :"))
height=float(input("enter the height of the cylinder :"))

#calculations
vol=3.14*radius*radius*height  #Volume = pi multiplied by height and square of radius

#printing the result
print("The volume of the Cylinder is :", vol)
