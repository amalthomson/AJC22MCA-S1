import datetime
now = datetime.datetime.now()

print("\nCurrent date and time is : ", end="")
print(now.strftime("%Y-%m-%d %H:%M:%S"))