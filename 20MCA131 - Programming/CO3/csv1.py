
import csv

a=open("sample.csv", newline='')

csv_reader=csv.reader(a)

print(next(csv_reader))
print(next(csv_reader))
print(next(csv_reader))