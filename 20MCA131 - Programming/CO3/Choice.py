import random
import os

print("Select a random element from the list : ")
elements = [1, 2, 3, 4, 5]
print(random.choice(elements))
print(random.choice(elements))
print(random.choice(elements))

print("\nSelect a random element from the set : ")
elements = set([1, 2, 3, 4, 5])
print(random.choice(tuple(elements)))
print(random.choice(tuple(elements)))
print(random.choice(tuple(elements)))

print("\nSelect a random element from the dictonary : ")
d={'d':1, 'b':2, 'c':3, 'd':4, 'e':5}
key=random.choice(list(d))
print(d[key])
key=random.choice(list(d))
print(d[key])
key=random.choice(list(d))
print(d[key])

print("\nSelect a random file for the directory : ")
print(random.choice(os.listdir("/")))