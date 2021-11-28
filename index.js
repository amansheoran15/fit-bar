const http= require('http');
const port = 8080;


const fs=require('fs');
const express= require('express');

const app=express();

app.use(express.static('./'));

app.get('/',function (req,res){
    fs.readFile('home.html',function (err,data){
        return res.end(data);
    });
});

app.listen(port,function (err){
    console.log(port);
});

































// function requestHandler(req,res) {
//     let url = req.url;
//     let filePath;
//     res.writeHead(200, {'content-type': 'text/html'});
//     switch (url) {
//         case '/': {
//             filePath = './home.html'
//             break;
//         }
//
//         case '/home.html': {
//             filePath = './home.html'
//             break;
//         }
//         case '/about_us': {
//             filePath = './about_us.html'
//             break;
//         }
//         case '/facilities': {
//             filePath = './facilities.html'
//             break;
//         }
//         default:
//             res.end('<h1>Not Found</h1>');
//
//     }
//
//     fs.readFile(filePath, function (err, data) {
//         if (err) {
//             return res.end('<h1>Error</h1>');
//         }
//         return res.end(data);
//     })
// }
//
//     const server = http.createServer(requestHandler);
//
//     server.listen(port,function(err){
//         if(err){
//             return res.end('<h1>Error</h1>');
//         }
//
//     })
