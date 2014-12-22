var value = 500; //Global variable
var obj = {
    value: 0,
    increment: function() {
        this.value++;
        var that = this;
        var innerFunction = function() {
            console.log(this.value);
            console.log(that.value);
        }

        innerFunction(); //Function invocation pattern
    }
}
obj.increment(); //Method invocation pattern
