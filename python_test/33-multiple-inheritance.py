class Mario():
    def move(self):
        print(1)
        
class Shroom():
    def eat(self):
        print(2)
        
class BigMario(Mario, Shroom):
    pass

bigMario = BigMario()
bigMario.move()