#!/usr/bin/env python3
#
# @author Jian Zhao <boborabit@gmail.com>
#
# @description 
#

class Bird(object):
  
    def __init__(self,color):
        self.color = color

    def speak(self):
        print("I'm a bird of color " + self.color)
