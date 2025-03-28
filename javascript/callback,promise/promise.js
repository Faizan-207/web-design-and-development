let promise = new Promise((resolve,reject)=>{
    //pending state
    console.log("Hello world");
    //fulfill
    resolve("Sucessfully completed");
    //rejected
    reject("Stop due to some error");


})

console.log(promise)

function step1() {
    return new Promise((resolve) => {
        setTimeout(() => {
            console.log("Step 1 completed");
            resolve();
        }, 1000);
    });
}

function step2() {
    return new Promise((resolve) => {
        setTimeout(() => {
            console.log("Step 2 completed");
            resolve();
        }, 1000);
    });
}

function step3() {
    return new Promise((resolve) => {
        setTimeout(() => {
            console.log("Step 3 completed");
            resolve();
        }, 1000);
    });
}

// Promise chaining
step1()
    .then(step2)
    .then(step3)
    .then(() => {
        console.log("All steps done!");
    });
