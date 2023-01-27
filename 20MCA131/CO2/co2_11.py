a=int(input("Enter Value 1 : "))
b=int(input("Enter Value 2 : "))
c=int(input("Enter Value 3 : "))
area_square = lambda side : side * side
area_rectangle = lambda length,width : length * width
area_triangle =  lambda s,a,b,c : (s*(s-a)*(s-b)*(s-c)) ** 0.5
s = (a + b + c) / 2
print("Area of Square : ",area_square(a))
print("Area of Rectangle : ",area_rectangle(a,b))
print("Area of Triangle : ",area_triangle(s,a,b,c))
