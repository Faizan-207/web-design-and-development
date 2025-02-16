let promise = new Promise((resolve,reject)=>{
    //pending state
    console.log("Hello world");
    //fulfill
    resolve("Sucessfully completed");
    //rejected
    reject("Stop due to some error");


})

console.log(promise)