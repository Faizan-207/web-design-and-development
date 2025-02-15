//Asynchronous programing

function print(){
    console.log("hello world");
}

console.log("first");
console.log("second");
setTimeout(print,300)
console.log("third");


