
read_file = open("read.txt", "r")
read_lines = read_file.readlines()
print(read_lines)
read_file.close()
write_file = open("write.txt", "w")
for i in range(0, len(read_lines)):
    if i%2==0:
        write_file.write(read_lines[i])
write_file.close()
file = open("write.txt","r")
lines = file.readlines()
print(lines)
file.close()