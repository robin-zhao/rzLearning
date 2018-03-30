class People:
    age = 3
    
    def say(self):
        print(self.age)
        
    def grow(self):
        self.age += 1

people = People()

people.grow()

print('age is ' + str(people.age));

