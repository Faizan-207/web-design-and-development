function getdata(id,nextFunction){
    setTimeout(()=>{
        console.log("data :",id)
        if(nextFunction){
        nextFunction(id);
        }
    },2000)
}

//callback hell  (this style of programing is diffcuilt to understand and manage)
getdata(1, ()=>{
    console.log("Getting data 2...");
    getdata(2, ()=>{
        console.log("Getting data 3...");
        getdata(3,()=> {
            console.log("Getting data 4...");
            getdata(4,()=> {
                console.log("Getting data 5...");
                getdata(5,()=>{
                    console.log("Getting data 6...");
                    getdata(6);
                });
            })
        });
    });
});