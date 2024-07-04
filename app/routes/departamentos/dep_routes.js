// Loading php-express module.
const express = require('express');
const router = express.Router();
const phpExpress = require('php-express')({
    binPath: 'php'
});
const bodyParser = require('body-parser');
// Loading php-express module.

// Use bodyParser middleware to parse request bodies
router.use(bodyParser.urlencoded({ extended: false }));
// Use bodyParser middleware to parse request bodies

// Use php-express to serve all .php files.
router.all(/.+\.php$/, phpExpress.router);
// Use php-express to serve all .php files.

// ************* Routes *************

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

// Centro de Informacion endpoint.
router.get('/cinformacion', (req, res) => {
    res.render('misc/departamentos/cinformacion/index');
});
// Centro de Informacion endpoint.

// Residencia endpoint.
router.get('/residencia', (req, res) => {
    res.render('misc/departamentos/Residencia/index');
});
// Residencia endpoint.

// Escolares endpoint.
router.get('/escolares', (req, res) => {
    res.render('misc/departamentos/escolares/index');
});
// Escolares endpoint.

// Recursos Humanos endpoint.
router.get('/rh', (req, res) => {
    res.render('misc/departamentos/rh/index');
});
// Recursos Humanos endpoint.

// Extraescolares endpoint.
router.get('/extraescolares', (req, res) => {
    res.render('misc/departamentos/extraescolares/index');
});
// Extraescolares endpoint.

// Estudios Profesionales endpoint.
router.get('/dep', (req, res) => {
    res.render('misc/departamentos/dep/index');
});
// Estudios Profesionales endpoint.

// Servicio Social endpoint.
router.get('/ss', (req, res) => {
    res.render('misc/departamentos/ss/index');
});
// Servicio Social endpoint.


// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.