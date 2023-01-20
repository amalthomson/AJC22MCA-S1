

start = int(input("Enter start year : "))
end = int(input("Enter end year : "))

print("Leap Years in the given range are : ")


for year in range(start, end):

  if (0 == year % 4) and (0 != year % 100):
    print (year)
