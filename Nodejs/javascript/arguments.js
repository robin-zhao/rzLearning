function toto(){

  for(var i in arguments){
    console.log(arguments[i]);
  }
}

toto(1, 2, 3)
