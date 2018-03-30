#!/usr/bin/env python3

try:
    user_input = input("Type in an number:")
    val = int(user_input)
    
    print("You typed: " + str(val))
except ValueError:
    print("Not a Number.")