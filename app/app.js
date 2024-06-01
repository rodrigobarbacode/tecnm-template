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
const assets_dir = path.join(__dirname, 'views/php/public/assets');
const icons_dir = path.join(__dirname, 'views/php/public/icons');
const images_dir = path.join(__dirname, 'views/php/public/img');
const pdf_dir = path.join(__dirname, 'views/php/public/pdf');
const css_dir = path.join(__dirname, 'views/php/public/css');
const js_dir = path.join(__dirname, 'views/php/public/js');
// Define the directory where the public files are located.

// Serve static files from the 'public' directory.
app.use('/assets', express.static(assets_dir));
app.use('/icons', express.static(icons_dir));
app.use('/img', express.static(images_dir));
app.use('/pdf', express.static(pdf_dir));
app.use('/css', express.static(css_dir));
app.use('/js', express.static(js_dir));
// Serve static files from the 'public' directory.

// Setting up the view engine.
app.set('views', './views/php/main');
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
