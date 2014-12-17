var a = [1, 2, 3];
var b = [4, 5]
var c = 6;
var d = false;


//array.concat
var concat = a.concat(b ,c ,d);
console.log(concat);

//array.join
var join = concat.join(',');
console.log(join);

//array.push
concat.push([1,2]);
console.log(concat);
//array.pop
concat.pop();
console.log(concat);

//array.reverse
var reverse = concat.reverse();
console.log(reverse);

//array.shift
reverse.shift();
console.log(reverse);
// There's also array.unshift

//array.slice(start,end)
var slice = reverse.slice(1, -1);
console.log(slice);

//array.sort
var sort = slice.sort();
console.log(sort);
//custom sort.
sort.sort(function(a,b) {
   if(a % 2 == 1 && b % 2 == 0) {
      return -1;
   }
   if(b % 2 == 1 && a % 2 == 0) {
      return 1;
   }

   if(a < b) {
     return -1;
   }

   return 1;

});
console.log(sort);

//array.splice
// replace portion, return replcement.
var splice = sort.splice(1,2, 'a', [5, 6]);
console.log(sort,splice);







