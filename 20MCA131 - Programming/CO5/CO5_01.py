# programs using file operations

# open file
file = open ('sample.txt')
#file1 = file.readline()
file2 = file.readlines()

# print first line
#print("File Contents at Line 1 is : ", file1)

# print all file
print("File Contents : ", file2)

# print all file using strip()
file3 = [X.strip() for X in file2]
print ("\nFile Contents at after using STRIP is : ", file3)

# close file
file.close()
