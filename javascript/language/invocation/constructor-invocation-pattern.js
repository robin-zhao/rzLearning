var obj = {
    data : "Hello World"
}

var Func1 = function() {
    return obj;
}

var Func2 = function() {
    return "I am a simple type";
}

var f1 = new Func1(); //f1 is set to obj
var f2 = new Func2(); //f2 is set to a new object

console.log(f1 === obj);

console.log(f1.data);

console.log(f2);
