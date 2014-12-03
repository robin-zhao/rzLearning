#!/usr/bin/env python3
#
# @author Jian Zhao <boborabit@gmail.com>
#
# @description 
#

def bubbleSort(alist):
    bubbleSorted = 0
    if len(alist) > 2:
       for key, val in enumerate(alist):
           if key < len(alist) - 1:
               if val > alist[key + 1]:
                   alist[key], alist[key + 1] = alist[key + 1], alist[key]
                   bubbleSorted = 1
    else:
        if alist[0] > alist[1]:
            alist[0], alist[1] = alist[1], alist[0]
        return alist

    if bubbleSorted == 1:
        return bubbleSort(alist)
    else:
        return alist

alist = [1, 10, 20, 5, 4, 9, 7, 100, 5]
print(bubbleSort(alist))
