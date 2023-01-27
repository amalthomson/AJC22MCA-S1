file = open ('sample.txt')
file2 = file.readlines()
print("File Contents : ", file2)
file3 = [X.strip() for X in file2]
print ("\nFile Contents at after using STRIP is : ", file3)
file.close()
