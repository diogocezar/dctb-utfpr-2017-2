var lib = require('./lib.js');

function sub(n1, n2){
	return n1 - n2;
}

console.log('Olá Mundo!');

console.log(lib.soma(4,23));
console.log(sub(32,3));

var a = (a,b) => (a+b);

console.log(a(10,20));