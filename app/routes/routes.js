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
// SIG endpoint.

// CCO endpoints.
router.use(require('./cco/cco_routes.js'))
// CCO endpoints.

// Centro de Informacion endpoint.
router.get('/cinformacion', (req, res) => {
    res.render('misc/departamentos/cinformacion/index');
});
// Centro de Informacion endpoint.

// Personal No Docente endpoint.
router.get('/personalnodoc', (req, res) => {
    res.render('misc/reglamentos/personal-no-doc/index');
});
// Personal No Docente endpoint.

// Personal Docente endpoint.
router.get('/personaldoc', (req, res) => {
    res.render('misc/reglamentos/personal-doc/index');
});
// Personal Docente endpoint.

// Servicio Social endpoint.
router.get('/ss', (req, res) => {
    res.render('misc/departamentos/ss/index');
});
// Servicio Social endpoint.

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

// Quejas endpoint.
router.get('/quejas', (req, res) => {
    res.render('misc/quejas/index');
});
// Quejas endpoint.

// Sistemas de Prevención y Protección Contra Incendios endpoint.
router.get('/incendios', (req, res) => {
    
    res.render('misc/incendios/index');
});
// Sistemas de Prevención y Protección Contra Incendios endpoint.

// Mail Handler endpoint.
router.post('/success', (req, res) => {
    res.render('misc/mail-handler/mail');
});
// Mail Handler endpoint.

// File-Viewer endpoint.
router.post('/file-viewer', (req, res) => {
    res.render('misc/pdf/index');
});
// File-Viewer endpoint.

// Template endpoint.
router.get('/template', (req, res) => {
    res.render('misc/template/index');
});
// Template endpoint.

// Estudios Profesionales endpoint.
router.get('/dep', (req, res) => {
    res.render('misc/departamentos/dep/index');
});
// Estudios Profesionales endpoint.


// CCO endpoints.
router.use(require('./carreras/carreras_routes.js'))
// CCO endpoints.


// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.