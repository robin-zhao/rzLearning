// array contains different types.
var misc = [
    'string',
    10,
    null,
    NaN,
    Infinity,
    [1],
    {toto: 'tata'}
];
console.log(misc.length);

// set a large key to increase the length.
misc[100] = 10;
console.log(misc.length);

// set explicit.
misc.length = 3;
console.log(misc);

// append new items.
misc[misc.length] = 'new item';
console.log(misc);
misc.push('another new item');
console.log(misc);

// delete
delete misc[1];
console.log(misc);
console.log(misc.length);
misc.splice(1,1);
console.log(misc);
console.log(misc.length);


// is_array
console.log(typeof misc);//object

var is_array = function(value) {
    return value &&
        typeof value === 'object' &&
        typeof value.length === 'number' &&
        typeof value.splice === 'function' &&
        !(value.propertyIsEnumerable('length'));
}

console.log(is_array(misc));
console.log(is_array({}));





