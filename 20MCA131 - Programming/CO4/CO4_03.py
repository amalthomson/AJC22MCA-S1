class Rectangle:
    def __init__(self, length, width):
        self.__length = length
        self.__width = width
        self.area=length*width
    def __lt__(self, other):
        if self.area<other.area:
            return "Reactangle 1 is smaller in Area"
        else:
            return "Reactangle 2 is smaller in Area"
l1=int(input("Enter the length of rectangle 1 : " ))
b1=int(input("Enter the breadth of rectangle 1 : " ))
l2=int(input("Enter the length of rectangle 2 : " ))
b2=int(input("Enter the breadth of rectangle 2 : " ))

r1=Rectangle(l1,b1)
r2=Rectangle(l2,b2)

print(r1<r2)