// Load the required module
const express = require('express');

// Construct the router.
const router = express.Router();

// Load the renderPage function.
const renderPage = require('../config/functions').renderPage;

/* GET Routes */

// Bienvenida endpoint.
router.get('/bienvenida', renderPage(
    p = "pages/departments/bienvenido",
    t = "TecNM | Bienvenido"
));

// Transparencia endpoint.
router.get('/transparencia', renderPage(
    p = "pages/departments/trasparencia",
    t = "TecNM | Trasparencia"
));

// Centro de Información endpoint.
router.get('/cinformacion', renderPage(
    p = "pages/departments/centro-informacion",
    t = "TecNM | Centro de Información"
));

// Residencia Profesional endpoint.
router.get('/residencia', renderPage(
    p = "pages/departments/residencia",
    t = "TecNM | Residencia Profesional"
));

// Servicios Escolares endpoint.
router.get('/escolares', renderPage(
    p = "pages/departments/escolares",
    t = "TecNM | Servicios Escolares"
));

// Recursos Humanos endpoint.
router.get('/rh', renderPage(
    p = "pages/departments/recursos-humanos/recursos-humanos",
    t = "TecNM | Recursos Humanos"
));

// Extraescolares endpoint.
router.get('/extraescolares', renderPage(
    p = "pages/departments/extraescolares",
    t = "TecNM | Extraescolares"
));

// Departamento de Estudios Profesionales endpoint.
router.get("/page/dep", (_, res) => {
    res.render('pages/departments/departamento-estudios-profesionales/index');
});

// Departamento de Estudios Profesionales endpoint.
router.get('/dep', renderPage(
    p = "pages/departments/departamento-estudios-profesionales/dep",
    t = "TecNM | Departamento de Estudios Profesionales"
));

// Servicio Social endpoint.
router.get('/ss', renderPage(
    p = "pages/departments/servicio-social",
    t = "TecNM | Servicio Social"
));

// Contraloria Social endpoint.
router.get('/contraloria_social', renderPage(
    p = "pages/departments/contraloria-social/contraloria-social",
    t = "TecNM | Contraloria Social"
));

/* GET Routes */

// Export the router.
module.exports = router;