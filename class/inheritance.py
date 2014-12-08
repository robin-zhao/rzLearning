#!/usr/bin/env python3
#
# @author Jian Zhao <boborabit@gmail.com>
#
# @description 
#

class Bird(object):

    def __init__(self, name):
        self.name = name

    def speak(self):
        print("My name is " + self.name);

    def __str__

class Penguin(Bird):
    pass
#    def __init__(self, name):
#        Bird.__init__(self,name)

penguin = Penguin("jack");
penguin.speak()
