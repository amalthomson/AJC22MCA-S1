dic1={'car':'mustang', 'price':20000000}
dic2={'year':2020, 'model':200002}
print("Dictionary 1 :", dic1)
print("Dictionary 2 :", dic2)
d=dic1.copy()
d.update(dic2)
print("\nThe Merged Dictionary is ; ")
print(d)
