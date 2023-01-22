# create an empty list
integers = []
n = int(input("Enter the size of List : "))
print("Enter", n, "Integers")
for i in range(0, n):
    elements = int(input())
    integers.append(elements)
print("\nThe elements in the List are : ", integers)
print("\nOdd Numbers in the List of Integers are : ")
for num in integers:
    if num % 2 != 0:
        print(num, end=" ")

