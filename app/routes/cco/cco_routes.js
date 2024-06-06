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


//CCO - Correo endpoint.
router.get('/recuperacion_correo', (req, res) => {
    res.render('misc/departamentos/ccomputo/correo/index');
});
//CCO - Correo endpoint.

//CCO - Infraestructura endpoint.
router.get('/infraestructura', (req, res) => {
    res.render('misc/departamentos/ccomputo/infraestructura/index');
});
//CCO - Infraestructura endpoint.


// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.