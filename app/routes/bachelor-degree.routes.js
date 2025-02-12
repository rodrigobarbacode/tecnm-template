// Load the required module
const express = require('express');

// Construct the router.
const router = express.Router();

// Load the renderPage function.
const renderPage = require('../config/functions').renderPage;

/* GET Routes */

//Licenciatura - Administracion endpoint.
router.get('/l_administracion', renderPage(
    p = "pages/bachelor-degree/administracion",
    t = "TecNM | Licenciatura en Administración"
));

//Licenciatura - Electronica endpoint.
router.get('/l_electronica', renderPage(
    p = "pages/bachelor-degree/electronica",
    t = "TecNM | Licenciatura en Electrónica"
));

//Licenciatura - Materiales endpoint.
router.get('/l_materiales', renderPage(
    p = "pages/bachelor-degree/materiales",
    t = "TecNM | Licenciatura en Materiales"
));

//Licenciatura - Renovables endpoint.
router.get('/l_renovables', renderPage(
    p = "pages/bachelor-degree/renovables",
    t = "TecNM | Licenciatura en Energías Renovables"
));

//Licenciatura - Electrica endpoint.
router.get('/l_electrica', renderPage(
    p = "pages/bachelor-degree/electrica",
    t = "TecNM | Licenciatura en Electrica"
));

//Licenciatura - Quimica endpoint.
router.get('/l_quimica', renderPage(
    p = "pages/bachelor-degree/quimica",
    t = "TecNM | Licenciatura en Quimica"
));

//Contador Publico endpoint.
router.get('/contador', renderPage(
    p = "pages/bachelor-degree/contador",
    t = "TecNM | Contador Público"
));

// Posgrado endpoint.
router.get('/posgrado', renderPage(
    p = "pages/bachelor-degree/posgrado",
    t = "TecNM | Posgrado"
));

/* GET Routes */

// Export the router.
module.exports = router;