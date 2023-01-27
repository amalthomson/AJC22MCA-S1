word=str(input("Enter the word : "))
a=word[0]
for i in word:
    if (i==a):
        word=word.replace(i, "$")
        word=a+word[1:]
print(word)

