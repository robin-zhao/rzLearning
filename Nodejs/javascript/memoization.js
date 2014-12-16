// without memoization.
var called = 0;
var fibonacci = function(n) {
    called++;    
    return n < 2 ? n : fibonacci(n-1) + fibonacci(n-2);
};

for(var i = 0; i <=10; i++) {
    fibonacci(i);
}
console.log(called);//453

//alternative,reduced call, but linked to global variable memo.
var called = 0;
var memo = [0,1];
var fibonacci = function(n) {
    called++;
    result = memo[n];
    if(typeof result !== 'number') {
        result=fibonacci(n-1) + fibonacci(n-2);
        memo[n] = result;
    }
    return result;
};

for(var i = 0; i <=10; i++) {
    fibonacci(i);
}
console.log(called);//29

// with memoization, so memo is part of function.
var called = 0;
var fibCalled = 0;
var fibonacci = function() {
    var memo = [0, 1];
    called++;
    var fib = function(n) {
        fibCalled++;
        var result = memo[n];
        if(typeof result !== 'number') {
          result = fib(n-1) + fib(n-2);
          memo[n] = result;
        }
        return result;
    }
    return fib;
}();

for (var i=0; i<=10; i++) {
    fibonacci(i);
}

console.log(called);//1
console.log(fibCalled);//29
