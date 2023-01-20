class time:
    def __init__(self,hour,minute,second):
        self.__hour=hour
        self.__minute=minute
        self.__second=second

    def __check__(self,other):
        if(self.__hour<other.__hour):
            return True
        elif(self.__hour==other.__hour):
            if(self.__minute<other.__minute):
                return True
            elif(self.__minute==other.__minute):
                return True
            if (self.__second<other.__second):
                    return True
            else:
                    return "equal"
h=int(input("Enter the hour:"))
m=int(input("Enter the minute:"))
s=int(input("Enter the second:"))
t1=time(h,m,s)
h1=int(input("Enter the hour:"))
m1=int(input("Enter the minute:"))
s1=int(input("Enter the second:"))
t2=time(h1,m1,s1)
print("if t1<t2 :")
print(t1.__check__(t2))

