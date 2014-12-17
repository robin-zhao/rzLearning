var big = Number.MAX_VALUE;
console.log(big);

var small = Number.MIN_VALUE;
console.log(small);

console.log(Number.NEGATIVE_INFINITY);
console.log(Number.POSITIVE_INFINITY);
console.log(Number.NaN);

var number = 123;
console.log(number.toString());
console.log(number.toString(2));
console.log(number.toString(16));

console.log(big.toString());

console.log(Math.PI.toFixed());
console.log(Math.PI.toFixed(0));//0-20
console.log(Math.PI.toFixed(2));
console.log(Math.PI.toFixed(10));

console.log(Math.PI.toPrecision());
// console.log(Math.PI.toPrecision(0));//1-21
console.log(Math.PI.toPrecision(1));
console.log(Math.PI.toPrecision(3));
console.log(Math.PI.toPrecision(7));

console.log(100.12345.toPrecision(1));
console.log(100.12345.toPrecision(2));
console.log(100.12345.toPrecision(4));
console.log(100.12345.toPrecision(6));

// console.log(100.toExponential(1)); // this fails.
console.log((100).toExponential(1)); 
console.log((100).toExponential(2)); 
console.log((100).toExponential(7)); 
