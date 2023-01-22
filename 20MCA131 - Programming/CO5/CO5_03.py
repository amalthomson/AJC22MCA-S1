

import csv
with open('sample_csv.csv', 'r') as file:
    reader = csv.reader(file)
    for row in reader:
        print(row)