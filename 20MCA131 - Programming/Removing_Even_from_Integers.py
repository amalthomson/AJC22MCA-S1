# create an empty list
integers = []

# add number of elements as input
n = int(input("Enter the size of List : "))
print("Enter", n, "Integers")


# iterating till the range
for i in range(0, n):
    elements = int(input())

# adding the element
    integers.append(elements)

print("\nThe elements in the List are : ", integers)

#displaying result
print("\nOdd Numbers in the List of Integers are : ")
for num in integers:

# checking condition
    if num % 2 != 0:
        print(num, end=" ")

