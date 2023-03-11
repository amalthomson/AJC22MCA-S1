
end = int(input("Enter the end year"))
print("Leap years in the range area :")
for year in range (2022, end):
  if(year%4==0) and (year%100!=0):
    print(year)