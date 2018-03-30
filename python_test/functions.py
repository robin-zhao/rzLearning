from _ast import Num
def hello():
    print("Hello", "World")
    
    
def add(a, b):
    print(a + b)
    

hello()

add(3, 5)


def yell(name = 'Robin', sound = 'BlaBla...'):
    print(name, sound)
    
    
yell(sound = 'qiuqiu ...')

def add_all(*args):
    total = 0
    for num in args:
        total += num 
        
    print(total)
    
    
add_all(1,2,3,4,5,6)
add_all(11,222,3,4,5,6)


def another(a, b, c):
    print(a, b, c)
    
arr = [1, 2, 3]

another(*arr)    

    
    
    
    