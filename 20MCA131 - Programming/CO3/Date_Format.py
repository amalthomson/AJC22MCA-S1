import time
import datetime

print("\nCurrent date and time: " , datetime.datetime.now())
print("\nCurrent year: ", datetime.date.today().strftime("%Y"))
print("\nMonth of year: ", datetime.date.today().strftime("%B"))
print("\nWeek number of the year: ", datetime.date.today().strftime("%W"))
print("\nWeekday of the week: ", datetime.date.today().strftime("%w"))
print("\nDay of year: ", datetime.date.today().strftime("%j"))
print("\nDay of the month : ", datetime.date.today().strftime("%d"))
print("\nDay of week: ", datetime.date.today().strftime("%A"))
