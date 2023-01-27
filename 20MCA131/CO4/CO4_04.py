class Time:
    def __init__(self, hour, minute, second):
        self.__hour = hour
        self.__minute = minute
        self.__second = second
    def __add__(self, other):
        return 'time is: ' + str(self.__hour + other.__hour) + ':' + str(self.__minute + other.__minute) + ':' + str(
            self.__second + other.__second)
h = int(input("enter the hour 1 : "))
m = int(input("enter the minute 1 : "))
s = int(input("enter the second 1 : "))
h1 = int(input("enter the hour 2 : "))
m1 = int(input("enter the minute 2 : "))
s1 = int(input("enter the second 2 : "))
t1 = Time(h, m, s)
t2 = Time(h1, m1, s1)
print(t1 + t2)