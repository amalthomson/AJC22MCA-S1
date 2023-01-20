
# program to read a file and write odd lines of the file to another file

# opening file to read and write data
read_file = open("read.txt", "r")
read_lines = read_file.readlines()
print(read_lines)
read_file.close()

# writing odd lines to new file
write_file = open("write.txt", "w")
for i in range(0, len(read_lines)):
    if i%2==0:
        write_file.write(read_lines[i])
write_file.close()

# displaying the new file
file = open("write.txt","r")
lines = file.readlines()
print(lines)
file.close()