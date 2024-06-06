// Importing the required modules.
const {google} = require('googleapis');
const routes = require('./routes/routes');
const express = require('express');
const path = require('path');

require('dotenv').config();
// Importing the required modules.

// Provide the required configuration.
const CREDENTIALS = JSON.parse(process.env.CREDENTIALS);
const CALENDAR_ID = process.env.CALENDAR_ID;
// Provide the required configuration.

// Google Calendar API Settings.
const SCOPES = 'https://www.googleapis.com/auth/calendar';
const calendar = google.calendar({version : "v3"});

const auth = new google.auth.JWT(
    CREDENTIALS.client_email,
    null,
    CREDENTIALS.private_key,
    SCOPES
);
// Google Calendar API Settings.

// Importing the php-express module.
const phpExpress = require('php-express')({
    binPath: 'php' // Ruta a tu ejecutable de PHP
});
// Importing the php-express module.

// Create an Express application.
const app = express();
// Create an Express application.

// Define the directory where the public files are located.
const assets_dir = path.join(__dirname, 'views/php/public/assets');
const icons_dir = path.join(__dirname, 'views/php/public/icons');
const images_dir = path.join(__dirname, 'views/php/public/img');
const json_dir = path.join(__dirname, 'views/php/public/json');
const misc_dir = path.join(__dirname, 'views/php/main/misc');
const css_dir = path.join(__dirname, 'views/php/public/css');
const pdf_dir = path.join(__dirname, 'views/php/public/pdf');
const js_dir = path.join(__dirname, 'views/php/public/js');
// Define the directory where the public files are located.

// Serve static files from the 'public' directory.
app.use('/assets', express.static(assets_dir));
app.use('/icons', express.static(icons_dir));
app.use('/img', express.static(images_dir));
app.use('/json', express.static(json_dir));
app.use('/misc', express.static(misc_dir));
app.use('/pdf', express.static(pdf_dir));
app.use('/css', express.static(css_dir));
app.use('/js', express.static(js_dir));
// Serve static files from the 'public' directory.

// Setting up the view engine.
app.set('views', './views/php/main');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');
// Setting up the view engine.

// Use php-express to serve all .php files.
app.all(/.+\.php$/, phpExpress.router);
// Use php-express to serve all .php files.

// Use the routes defined in the routes.js file.
app.use(routes);
// Use the routes defined in the routes.js file.

// ************* Routes *************

const getEvents = async (start, end) => {
    try {
        let response = await calendar.events.list({
            auth: auth,
            calendarId: CALENDAR_ID,
            timeMin: start,
            timeMax: end,
            timeZone: 'Pacific/Los Angeles'
        });
    
        let items = response.data.items;
        let events = items.map(item => {
            return {
                summary: item.summary,
                description: item.description,
                title: item.summary,
                start: item.start.dateTime,
                end: item.end.dateTime
            };
        });
        
        return events;
    } catch (error) {
        console.log(`Error at getEvents --> ${error}`);
        return [];
    }
};

let start = '2024-01-01T00:00:00.000Z';
let end = '2024-07-30T23:59:59.999Z';

// Testing Endpoint
app.get('/test', (req, res) => {
    getEvents(start, end)
     .then((res) => {
        console.log(res)
     })
    .catch((err) => {
        console.log(err)
     });
});
// Testing Endpoint

// ************* Routes *************

// Define the port where the server will listen for requests.
const PORT = 81;
app.listen(PORT, () => {
    console.log(`Node / PHP server running on http://localhost:${PORT}`);
});
// Define the port where the server will listen for requests.
