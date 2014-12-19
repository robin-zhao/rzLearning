var mammal = {
  name: 'a mammal',
  say: function() {
    return this.name;
  }
};

var cat = Object.create(mammal);

cat.name = 'a cat';

console.log(cat.say());
