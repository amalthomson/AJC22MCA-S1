a=str(input("Color 1 : "))
b=str(input("Color 2 : "))
c=str(input("Color 3 : "))

x=[a, b, c]
print(x)

d=str(input("Color 1 : "))
e=str(input("Color 2 : "))
f=str(input("Color 3 : "))

y=[d, e, f]
print(x)

ax=set(x)
ay=set(y)

print(ax)
print(ay)

az=ay.difference(ax)
print(az)