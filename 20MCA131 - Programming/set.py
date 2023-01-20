s={"aaa", "bbb", "ccc"}
print(s)

s={"aaa", "bbb", "ccc", "aaa"}
print(s)

#add elements to set
s.add("ddd")
print(s)

#update elements to as set
s.update("eee")
print(s)

q={"xxx", "yyy", "zzz"}
print(q)

#update or join two sets
s.update(q)
print(s)

#remove set element
s.remove("xxx")
print(s)
s.discard("yyy")
print(s)
s.pop()
print(s)


#convert set into list
y=list(s)
print(y)

z=set(y)
print(z)

#join two sets
aa={1,2,3}
ab={4,5,6}
ac=aa.union(ab)
print(ac)

aa={1,2,3}
ab={4,5,6}
ac=aa.union(ab)
print(ac)

ad=aa.copy()
print(ad)

ae=aa.intersection(ab)
print(ae)

af=aa.intersection(ab)
print(af)