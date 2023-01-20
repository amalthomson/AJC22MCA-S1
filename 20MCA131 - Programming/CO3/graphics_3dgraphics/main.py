from graphics.rectangle import area, perimeter

length=int(input("Enter the Length : "))
breadth=int(input("Enter the Breadth : "))
radius=int(input("Enter the Radius :"))
width=int(input("Enter the Width : "))
height=int(input("Enter the Height :"))


arearect=area(length, breadth)
print("\nThe Area of Rectangle is : ", arearect)

perirect=perimeter(length, breadth)
print("The Perimeter of Rectangle is : ", perirect)

from graphics.circle import area, perimeter

areacir=area(radius)
print("\nThe Area of Circle is : ", areacir)

pericir=perimeter(radius)
print("The Perimeter of Circle is : ", pericir)

from graphics.graphics2.sphere import area, perimeter

areasph=area(radius)
print("\nThe Area of Sphere is : ", areasph)

perisph=perimeter(radius)
print("The Perimeter of Sphere is : ", perisph)

from graphics.graphics2.cubiod import area, perimeter

areacub=area(length, width, height)
print("\nThe Area of Cuboid is : ", areacub)

pericub=perimeter(length, width, height)
print("The Perimeter of Cuboid is : ", pericub)