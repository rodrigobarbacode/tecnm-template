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
    res.render('public/assets/departamentos/bienvenida/index');
});
// Welcome endpoint.

// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.