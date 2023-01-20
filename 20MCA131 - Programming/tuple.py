x=("aaa", "bbb", "ccc")

print(x)
print(x[0])
print(x+x)

print(x[-1])
print(x[-2])

if "aaa" in x:
    print("yes")

a=list(x)
print(a)
a[1]="hhh"
print(a)
b=tuple(a)
print(b)

ax=list(b)
print(ax)
ax.append("zzz")
print(ax)
bx=tuple(ax)
print(bx)

ay=bx*2
print(ay)



