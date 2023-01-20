import random
import string

print("\nGenerate a random Color Hex : ")
print("#{:06x}".format(random.randint(0, 0xFFFFFF)))

print("\nGenerate a random alphabetical String : ")
max_lenght = 50
s = ""

for i in range (random.randint(1, max_lenght)):
    s += random.choice(string.ascii_letters)
print(s)

print("\nGenerate a Random Value between two integers, inclusive : ")
print(random.randint(0, 10))
print(random.randint(-10, 10))
print(random.randint(1, 5))

print("\nGenerate a random multiple of 7 between 0 and 70 : ")
print(random.randint(0, 10)*7)

