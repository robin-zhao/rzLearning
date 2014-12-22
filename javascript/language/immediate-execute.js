// 1
(function(toto){
    console.log(toto);
})("hello");

// 2, same as 1
(function(toto){
    console.log(toto);
})("world");



var toto = function () {
    console.log('executed');
    return 1;   
}();
console.log(1);

var tata = function(titi) {
    console.log(titi);
}("bibi");
console.log(tata);
