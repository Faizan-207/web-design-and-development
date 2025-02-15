function sum(a , b){
    console.log("Sum is :",a+b);
}

function callback( c, d, sumcallback ){
    sumcallback(c,d);
}

callback(2,4, sum);

