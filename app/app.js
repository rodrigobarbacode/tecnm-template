// Create a simple Node JS App.
// This app will listen on port 5000 and return a simple message.

var http = require('http');

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.end('Hello World\n');
    }
).listen(5000);

console.log('Server running at http://localhost:5000/');
