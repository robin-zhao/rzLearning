first = [1, 2, 3, 7]
last = [4, 5, 6]

all = zip(first, last)


for a, b in all:
    print(a, b)



students = {
    'hell': 100,
    "world": 200,
    "bb": 50,
    "aa": 400,
    "cc": 150
}

zipped = zip(students.values(), students.keys())

print(zipped)

print(min(zipped))



print(max(zipped))

print(sorted(zipped))