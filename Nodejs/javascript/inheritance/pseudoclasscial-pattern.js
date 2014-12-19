var Mammal = function(name) {
    this.name = name;
};

Mammal.prototype.getName = function() {
    return this.name;
};
Mammal.prototype.say = function() {
    return 'Hi I am ' + this.name;
};

var Cat = function(name, color) {
    this.name = name;
    this.color = color;
};

Cat.prototype = new Mammal();
var cat = new Cat("kitty", "black");
console.log(cat.say());
Cat.prototype.getColor = function() {
    return this.color;
};
console.log(cat.getColor());

