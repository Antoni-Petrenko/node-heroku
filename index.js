//main depend.
const express =require("express");
const path=require("path");


const app=express();
const bodyParser = require("body-parser");
const numbers=[
    {tel:"+38067111111",time:0},
    {tel:"+48881222222",time:0},
    {tel:"+38063333333",time:0},
    {tel:"+38064444444",time:0},
    {tel:"+38065555555",time:0}
];


app.use(bodyParser.urlencoded({ extended: false }));

app.get("/",(req,res,next)=>{
    res.send("<h1>Hello</h1>")
})


app.post("/",(req,res,next)=>{   
    console.log( JSON.parse(req.body))
    res.end()
})

app.listen(80);

