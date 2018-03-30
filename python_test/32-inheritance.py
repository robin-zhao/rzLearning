class Parent():
    def print_last_name(self):
        print('hello')
        
class Child(Parent):
    
    def print_first_name(self):
        print('world')
        
        
    def print_first_name(self):
        print('overrided.')
        

object = Child()
object.print_last_name()
object.print_first_name()
