const express = require("express");
const app = express();
const PORT = 5000;

app.set("view engine", "ejs");

app.get('/favicon.ico', (req, res) => res.status(204));

app.get("/", (req,res)=>{
    res.set("flag", "gigem{f0undH3ad3rFl4g}");
    res.render("index");
});

app.listen(PORT,console.log(`Server Started at port ${PORT}`));
