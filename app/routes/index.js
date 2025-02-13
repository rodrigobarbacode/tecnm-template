// Load the required modules
const multer = require('multer');
const express = require('express');
const nodemailer = require('nodemailer');
const bodyparser = require('body-parser');

// Construct the router.
const router = express.Router();

// Load mail tokens.
const MailTokens = require('../api/google/Email-Sender/tokens.json');

// Create the upload object.
var upload = multer();

// Load the renderPage function.
const renderPage = require('../config/functions').renderPage;

// Set the middlewares.
router.use(express.json());
router.use(upload.array()); 
router.use(bodyparser.urlencoded({ extended: true }));

/* GET Routes */

// Index endpoint.
router.get("/", renderPage(
    p = "partials/home",
    t = "TecNM | Tecnológico Nacional de México"
));

// Invitación endpoint.
router.get("/invitacion", renderPage(
    p = "pages/invitacion",
    t = "TecNM | Invitación"
));

// Directorio endpoint.
router.get("/word/directorio", (req, res) => {
    res.render('pages/directory/index');
});

router.get("/directorio", renderPage(
    p = "pages/directory/directory",
    t = "TecNM | Directorio"
));

// SIG endpoint.
router.get("/sig", renderPage(
    p = "pages/sig",
    t = "TecNM | SIG"
));

// Personal No Docente endpoint.
router.get("/personalnodoc", renderPage(
    p = "pages/rulesets/personal-no-doc",
    t = "TecNM | Personal No Docente"
));

// Personal Docente endpoint.
router.get('/personaldoc', renderPage(
    p = "pages/rulesets/personal-doc",
    t = "TecNM | Personal Docente"
));

// Quejas endpoint.
router.get('/quejas', renderPage(
    p = "pages/quejas",
    t = "TecNM | Quejas / Sugerencias"
));

// Sistemas de Prevención y Protección Contra Incendios endpoint.
router.get('/incendios', renderPage(
    p = "pages/incendios",
    t = "TecNM | Sistema de Prevención y Protección Contra Incendios"
));

// Bachelor Degree endpoints.
router.use(require('./bachelor-degree.routes.js'))

// Department endpoints.
router.use(require('./department.routes.js'))

// Computer Center endpoints.
router.use(require('./cco.routes.js'))

/* GET Routes */

/* POST Routes */

// Mail-Handler endpoint.
router.post('/mail', (req, res) => {
    console.log(req.body)
    
    let config = {
        service: 'gmail',
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
        from: 'Automated Email <no-reply@itmexicali.edu.mx>',
        sender: 'no-reply@itmexicali.edu.mx',
        to: req.body.inputEmail,
        subject: 'Welcome to ABC Website!',
        html: "<b>Hello world?</b>",
        replyTo: "ss_ccomputo@itmexicali.edu.mx"
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

// File-Viewer endpoint.
router.post('/file-viewer', (req, res) => {
    res.render('templates/pdf');
});

/* POST Routes */

// Export the router.
module.exports = router;