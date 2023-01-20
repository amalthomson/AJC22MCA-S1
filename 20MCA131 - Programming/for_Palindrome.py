x = input("Enter a number : ")
 
w = ""

for i in x:
    w = i + w
 
if (x == w):
    print("Enter number is Palindrome")
else:
    print("Enter number is Not Palindrome ")
