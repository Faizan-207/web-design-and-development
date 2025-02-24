function getdata(id,next){

    return new Promise((reslove,reject)=> {
        setTimeout(()=>{
            console.log("Data :",id)
            if (next){
                next();
            }
        },1000)
    })
}

getdata(3,()=>{
    getdata(4);
})