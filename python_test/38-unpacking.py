from tkinter.constants import LAST
one, two, three = [1, 2, 3]

print(one)

print(two)

print(three)


def drop_first_last(items):
    first, *all, last = items
    print(first)
    print(last)
    
drop_first_last([1, 2, 3, 4])