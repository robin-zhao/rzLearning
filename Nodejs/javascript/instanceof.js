Car = function(brand){
  this.brand = brand;
}

car = new Car("Ford");

console.log(car instanceof Car);
console.log(car instanceof Object);
console.log(car instanceof Function);//false

console.log(Car instanceof Object);
console.log(Car instanceof Function);

