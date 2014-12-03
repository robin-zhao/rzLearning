#!/usr/bin/env python3
#
# @author Jian Zhao <boborabit@gmail.com>
#
# @description 
#

def quicksort(alist):
    if len(alist) > 1:
        left = []
        right = []
        key = alist.pop()
        for i in alist:
            if i < key:
                left.append(i)
            else:
                right.append(i)
        sortedLeft = quicksort(left)
        sortedRight = quicksort(right)
        return sortedLeft + [key] + sortedRight
    else:
        return alist

alist = [1, 10, 20, 5, 4, 9, 7, 100, 5]
print(quicksort(alist))
