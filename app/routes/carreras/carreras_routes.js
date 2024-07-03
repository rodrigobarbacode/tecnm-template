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

//Licenciatura - Administracion endpoint.
router.get('/l_administracion', (req, res) => {
    res.render('misc/carreras/administracion/index');
});
//Licenciatura - Administracion endpoint.

//Licenciatura - Electronica endpoint.
router.get('/l_electronica', (req, res) => {
    res.render('misc/carreras/electronica/index');
});
//Licenciatura - Electronica endpoint.

//Licenciatura - Materiales endpoint.
router.get('/l_materiales', (req, res) => {
    res.render('misc/carreras/materiales/index');
});
//Licenciatura - Materiales endpoint.

//Licenciatura - Renovables endpoint.
router.get('/l_renovables', (req, res) => {
    res.render('misc/carreras/renovables/index');
});
//Licenciatura - Renovables endpoint.'

//Licenciatura - Electrica endpoint.
router.get('/l_electrica', (req, res) => {
    res.render('misc/carreras/electrica/index');
});
//Licenciatura - Electrica endpoint.

//Licenciatura - Quimica endpoint.
router.get('/l_quimica', (req, res) => {
    res.render('misc/carreras/quimica/index');
});
//Licenciatura - Quimica endpoint.

//Contador Publico endpoint.
router.get('/contador', (req, res) => {
    res.render('misc/carreras/contador/index');
});
//Contador Publico endpoint.

// Posgrado endpoint.
router.get('/posgrado', (req, res) => {
    res.render('misc/carreras/posgrado/index');
});
// Posgrado endpoint.


// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.