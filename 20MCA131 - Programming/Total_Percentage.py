"""A program to get the name and marks of 5 subjects and calculate the total and percentage"""

#geting requried input from user for the calculations

name=str(input("enter the name of student :"))
m1=float(input("enter the mark (Max. Marks = 100) scored in subject 1 :"))
m2=float(input("enter the mark (Max. Marks = 100) scored in subject 2 :"))
m3=float(input("enter the mark (Max. Marks = 100) scored in subject 3 :"))
m4=float(input("enter the mark (Max. Marks = 100) scored in subject 4 :"))
m5=float(input("enter the mark (Max. Marks = 100) scored in subject 5 :"))

#calculations
tmarks=m1+m2+m3+m4+m5
per=(tmarks/500)*100                    #Percentage = (total marks scored/total marks)*100

#printing the result
print("The name of student is :", name)
print("Total marks scored is :", tmarks)
print("Percentage =", per)
