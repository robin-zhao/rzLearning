#!/usr/bin/env python3
#
# @author Jian Zhao <boborabit@gmail.com>
#
# @description 
#

def insertSort(alist, i=1):
    if len(alist) > 2:
        if i < len(alist):
            temp = alist[i]
            j = i
            while j > 0 and alist[j-1] > temp:
                alist[j] = alist[j-1]
                j = j - 1
            alist[j] = temp
            print(alist)
            return insertSort(alist, i=i+1)
        else:
            return alist
    else:
        return alist


alist = [1, 10, 20, 5, 4, 9, 7, 100, 5]
insertSort(alist)
