// In JavaScript you do this by assigning an instance of the parent class to the child class, and then specializing it.

var Person = function(name) {
  this.name = name
}

Person.prototype.walk = function(){
  console.log(this.name + "is walking")
}
Person.prototype.sayHello = function(){
  console.log(this.name + " says hello")
}

function Student (name, age) {
  Person.call(this, name)
  this.age= age
}

Student.prototype = Object.create(Person.prototype)

Student.prototype.walk = function(){
 console.log(this.name + ' ' + this.age + ' is walking') 
}

var student1 = new Student('tim', 10)
student1.walk()
student1.sayHello()

console.log(student1.constructor === Person)
Student.prototype.constructor = Student
console.log(student1.constructor === Student)


console.log(student1 instanceof Person)
console.log(student1 instanceof Student)


