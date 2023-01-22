y={'abc':40, 'xyz':20, 'def':50, 'aaa':100}
a=list(y.items())
a.sort()
print("Ascending Order is : ", a)
b=list(y.items())
b.sort(reverse=True)
print("Descending Order is : ", b)
