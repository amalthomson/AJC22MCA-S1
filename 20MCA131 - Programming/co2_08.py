sen = input("Enter few words : ")


longest = max(sen.split(), key=len)


print("Longest word is : ", longest)

print("And its length is: ", len(longest))
