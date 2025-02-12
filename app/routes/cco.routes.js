// Load the required module
const express = require('express');

// Construct the router.
const router = express.Router();

// Load the renderPage function.
const renderPage = require('../config/functions').renderPage;

/* GET Routes */

// Centro de Cómputo endpoint.
router.get('/cco', renderPage(
    p = "pages/departments/centro-computo",
    t = "TecNM | Centro de Cómputo"
));

//CCO - Correo @itmexicali endpoint.
router.get('/correo_itm', renderPage(
    p = "pages/departments/centro-computo/correo/itmexicali/correo",
    t = "TecNM | Correo ITMEXICALI"
));

//CCO - Correo @mexicali.tecnm endpoint.
router.get('/correo_tecnm', renderPage(
    p = "pages/departments/centro-computo/correo/mexicalitecnm/correo",
    t = "TecNM | Correo MEXICALI.TECNM"
));

//CCO - Infraestructura endpoint.
router.get('/infraestructura', renderPage(
    p = "pages/departments/infraestructura/infraestructura",
    t = "TecNM | Infraestructura"
));

/* GET Routes */

// Export the router.
module.exports = router;