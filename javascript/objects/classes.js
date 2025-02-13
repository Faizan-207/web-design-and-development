class user {
    constructor(name ,eamil){
        this.name =name;
        this.email= eamil;
    }
    
    viewdata(){
        console.log("Secret info.");
    }
}

let obj =new user("faizan","faizanakmal581@gmail.com");
let obj2 =new user("faizan ali","faizanakmal407@gmail.com");

obj.viewdata();
obj2.viewdata();


class admin extends user {
    editdata(){
        console.log("I can edit data!");
    }
}

let adminObj = new admin();
admin.viewdata();
adminObj.editdata();

