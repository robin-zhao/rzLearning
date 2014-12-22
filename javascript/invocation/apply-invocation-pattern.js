// example 1

var add = function(num1, num2) {
        console.log(num1+num2);
}

array = [3,4];
add.apply(null,array); //7


// example 2

var obj = {
    data:'Hello World'
}

var displayData = function() {
    console.log(this.data);
}

displayData(); //undefined
displayData.apply(obj); //Hello World
