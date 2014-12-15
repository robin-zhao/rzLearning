var Person = function(name){
  console.log('new instance of Person')
  this.name = name
}

var person1 = new Person("bob")

console.log(person1.name)

var person2 = new Person("ji")

console.log(person2.name)


Person.prototype.sayHello = function(){
  console.log(this.name + " says hello")
}

person1.sayHello()


