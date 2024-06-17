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

//CComputo endpoint.
router.get('/cco', (req, res) => {
    res.render('misc/departamentos/ccomputo/index');
});
//CComputo endpoint.


//CCO - Correo itmexicali endpoint.
router.get('/correo_itm', (req, res) => {
    res.render('misc/departamentos/ccomputo/correo/itmexicali/index');
});
//CCO - Correo itmexicali endpoint.


//CCO - Correo mexicalitecnm endpoint.
router.get('/correo_tecnm', (req, res) => {
    res.render('misc/departamentos/ccomputo/correo/mexicalitecnm/index');
});
//CCO - Correo mexicalitecnm endpoint.

//CCO - Infraestructura endpoint.
router.get('/infraestructura', (req, res) => {
    res.render('misc/departamentos/ccomputo/infraestructura/index');
});
//CCO - Infraestructura endpoint.


// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.