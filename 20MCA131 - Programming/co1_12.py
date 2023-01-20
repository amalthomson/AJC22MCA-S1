"""Accept a file name from user and print its extension"""

#getting user input
filename = input("Input the Filename with extension seperated with dot: ")

#checking condition
extension = filename.split(".")

#print result
print ("The extension of the file is : ", extension[-1])
