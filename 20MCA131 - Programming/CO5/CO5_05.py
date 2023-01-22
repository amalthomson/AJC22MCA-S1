# Data to be inserted
data = [{'Name': 'John', 'Age': 25, 'Country': 'United States'},
{'Name': 'Mike', 'Age': 32, 'Country': 'Canada'},
{'Name': 'Sarah', 'Age': 35, 'Country': 'United Kingdom'}]
with open('people.csv', 'w') as csvfile:
    headernames = ['Name', 'Age', 'Country']
    csvwriter = csv.DictWriter(csvfile, fieldnames=headernames)
    csvwriter.writeheader()
for row in data:
    csvwriter.writerow(row)
reader = csv.DictReader(csvfile)
for row in reader:
    print(row)