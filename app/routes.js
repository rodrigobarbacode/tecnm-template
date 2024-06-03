// Loading php-express module.
const express = require('express');
const router = express.Router();
const phpExpress = require('php-express')({
    binPath: 'php'
});
// Loading php-express module.

// Use php-express to serve all .php files.
router.all(/.+\.php$/, phpExpress.router);
// Use php-express to serve all .php files.

// ************* Routes *************

// Home endpoint.
router.get('/', (req, res) => {
    res.render('index');
});
// Home endpoint.

// Welcome endpoint.
router.get('/bienvenida', (req, res) => {
    res.render('misc/departamentos/bienvenida/index');
});
// Welcome endpoint.

// Transparencia endpoint.
router.get('/transparencia', (req, res) => {
    res.render('misc/departamentos/transparencia/index');
});
// Transparencia endpoint.

// Invitacion endpoint.
router.get('/invitacion', (req, res) => {
    res.render('misc/invitacion/index');
});
// Invitacion endpoint.

// Directorio endpoint.
router.get('/directorio', (req, res) => {
    res.render('misc/directorio/index');
});
// Directorio endpoint.

// SIG endpoint.
router.get('/sig', (req, res) => {
    res.render('misc/SIG/index');
});




// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.