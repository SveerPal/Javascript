const mongoose=require('mongoose');

const userSchema=new mongoose.Schema({
    firstname:{
        type:String,
        default:null
    },
    lastname:{
        type:String,
        default:null
    },
    email:{
        type:String,
        require:true,
        unique:true
    },
    password:{
        type:String,
    },
    token:{
        type:String,
    },
})

module.exports=mongoose.model("user",userSchema)//it will ad "s" in mongodb and also store in small latter