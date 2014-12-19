var toto = function(){

  var i = 0;
  
  return function(){
     i++;
     if (i > 5 ) {
       i = 0;
     }
     console.log(i);
  };
}();

toto();
toto();
toto();
toto();
toto();
toto();
toto();
toto();
