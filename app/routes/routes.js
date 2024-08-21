// Loading php-express module.
const express = require('express');
const router = express.Router();
const phpExpress = require('php-express')({
    binPath: 'php'
});
const nodemailer = require('nodemailer');
const Mailgen = require('mailgen');
const multer = require('multer');
const bodyparser = require('body-parser');
const MailTokens = require('../google_api/Email-Sender/tokens.json');
var upload = multer();
require('dotenv').config();




// Use php-express to serve all .php files.
router.all(/.+\.php$/, phpExpress.router);
// Use php-express to serve all .php files.

router.use(express.json())

router.use(bodyparser.urlencoded({ extended: true }))

router.use(upload.array()); 
router.use(express.static('public'));

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
    console.log(req.body)
    
    let config = {
        service: 'gmail', // your email domain
        host: "smtp.gmail.com",
        port: 465,
        secure: true,
        auth: {
            type: "OAuth2",
            user: "eventos@itmexicali.edu.mx",
            clientId: MailTokens.client_id,
            clientSecret: MailTokens.client_secret,
            refreshToken: MailTokens.refresh_token 
        }
    }

    let transporter = nodemailer.createTransport(config);

    let message = {
        from: 'Automated Email <no-reply@itmexicali.edu.mx>', // sender address
        sender: 'no-reply@itmexicali.edu.mx',
        to: req.body.inputEmail, // list of receivers
        subject: 'Welcome to ABC Website!', // Subject line
        html: "<b>Hello world?</b>", // html body
        replyTo: "ss_ccomputo@itmexicali.edu.mx" //Reply Address
    };
    console.log(message)

    transporter.sendMail(message).then((info) => {
        return res.status(200).json(
            {
                msg: "Email sent",
                info: info.messageId,
                preview: nodemailer.getTestMessageUrl(info)
            }
        )
    }).catch((err) => {
        console.log(err)
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