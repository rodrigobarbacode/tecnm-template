// Loading php-express module.
const express = require('express');
const router = express.Router();
const phpExpress = require('php-express')({
    binPath: 'php'
});
const nodemailer = require('nodemailer');
const Mailgen = require('mailgen');
require('dotenv').config();


// Use php-express to serve all .php files.
router.all(/.+\.php$/, phpExpress.router);
// Use php-express to serve all .php files.

// ************* Routes *************

// Home endpoint.
router.get('/', (req, res) => {
    res.render('index');
});
// Home endpoint.

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
router.post('/mail', (req, res) => {
    
    let config = {
        service: 'gmail', // your email domain
        auth: {
            user: process.env.NODEJS_GMAIL_APP_USER,   // your email address
            pass: process.env.NODEJS_GMAIL_APP_PASSWORD // your password
        }
    }
    let transporter = nodemailer.createTransport(config);

    let message = {
        from: 'pootissonic1808@gmail.com', // sender address
        to: 'a20490703@itmexicali.edu.mx', // list of receivers
        subject: 'Welcome to ABC Website!', // Subject line
        html: "<b>Hello world?</b>", // html body
    };

    transporter.sendMail(message).then((info) => {
        return res.status(201).json(
            {
                msg: "Email sent",
                info: info.messageId,
                preview: nodemailer.getTestMessageUrl(info)
            }
        )
    }).catch((err) => {
        return res.status(500).json({ msg: err });
    }
    );
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


// CCO endpoints.
router.use(require('./carreras/carreras_routes.js'))
// CCO endpoints.

// CCO endpoints.
router.use(require('./departamentos/dep_routes.js'))
// CCO endpoints.

// CCO endpoints.
router.use(require('./cco/cco_routes.js'))
// CCO endpoints.


// ************* Routes *************

// Export the router.
module.exports = router;
// Export the router.