
# importing csv
import csv

# opening csv file
with open('sample_csv.csv', 'r') as file:
    reader = csv.reader(file)

# displaying data in csv file
    for row in reader:
        print(row)