#!/usr/bin/env python3
#
# @author Jian Zhao <boborabit@gmail.com>
#
# @description 
#

c = 5 #global variable

def oneFunction(a,b):
    print(a + b + c)


oneFunction(100, 200)


def variableArgument(a, *b):
    print(a, b)

variableArgument(100,200,300,400)


def variableArgument2(a, *b, **c):
    print(a, b,c)

variableArgument2(100,200,300,400, d=500,e=600)


sum = lambda a, b: a + b
print(sum(100,200))
