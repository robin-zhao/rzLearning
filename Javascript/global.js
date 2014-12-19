var toto = 100;
tata = 200;
var jiji = function() {
    console.log(toto);
    console.log(tata);

    var innerVar1 = 300;
    innerVar2 = 400;
};

try {
    console.log(innerVar2);
} catch(e) {
    console.log(e);
}

jiji();

console.log(innerVar2);


