#!/usr/bin/env python3
#
# @author Jian Zhao <boborabit@gmail.com>
#
# @description 
#

f = open("test.txt", "r")

'''
file.read(n) - This method reads n number of characters from the file, or if n is blank it reads the entire file.
file.readline(n) - This method reads an entire line from the text file.
'''

c = f.read(5)
c2 = f.read()

print(c)
print(c2)

f.close()

f2 = open("test.txt", "r")
l = f2.readline()
l2 = f2.readline()

print(l)
print(l2)

f2.close()
