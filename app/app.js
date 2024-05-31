// Importing the required modules.
const routes = require('./routes');
const express = require('express');
const path = require('path');
// Importing the required modules.

// Importing the php-express module.
const phpExpress = require('php-express')({
    binPath: 'php' // Ruta a tu ejecutable de PHP
});
// Importing the php-express module.

// Create an Express application.
const app = express();
// Create an Express application.

// Define the directory where the public files are located.
const public_dir = path.join(__dirname, 'views/php/public');
// Define the directory where the public files are located.

// Serve static files from the 'public' directory.
app.use('/public', express.static(public_dir));
// Serve static files from the 'public' directory.

// Setting up the view engine.
app.set('views', './views/php');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');
// Setting up the view engine.

// Use php-express to serve all .php files.
app.all(/.+\.php$/, phpExpress.router);
// Use php-express to serve all .php files.

// Use the routes defined in the routes.js file.
app.use(routes);
// Use the routes defined in the routes.js file.

// Define the port where the server will listen for requests.
const PORT = 81;
app.listen(PORT, () => {
    console.log(`Node / PHP server running on http://localhost:${PORT}`);
});
// Define the port where the server will listen for requests.
