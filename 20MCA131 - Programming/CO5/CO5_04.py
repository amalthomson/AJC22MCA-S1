# importing csv
import csv

read_column = [1,3]
# opening csv file
with open('sample.csv', 'r') as file:
    reader = csv.reader(file)

# displaying data in csv file
   #for row in reader:
        #for i in read_column:
               #print(row[i])

    for row in reader:
           print([row[i] for i in read_column])