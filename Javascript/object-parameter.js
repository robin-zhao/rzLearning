// need to check paramenter precedence.
function toto(firstname, lastname, age, loc) {
    console.log(firstname);
}

toto("robin","zhao",10,"shanghai");


// object as parameter.

function tata(object){
    console.log(object.firstname);
}

tata({
    firstname: "robin",
    lastname: "zhao",
    age: 20,
    loc: "shanghai",
});
