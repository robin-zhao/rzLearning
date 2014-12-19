var o = {
  a: 5,
  get getA() {
    return this.a + 1;
  },
  set setA(x) {
    this.a = x;
  }
 };

console.log(o.a);

o.setA = 10;

console.log(o.a);

console.log(o.getA);


// definedProperty.
var o2 = {
  value: 100
};
Object.defineProperty(o2, "p", {
  get:function() {
    return this.value - 10;
  },
  set: function(x) {
    this.value += x;
  }
});

o2.p = 100;

console.log(o2.p);
