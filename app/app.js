// Importing the required modules.
const fs = require('fs').promises;

const path = require('path');
const process = require('process');
const {google} = require('googleapis');
const {authenticate} = require('@google-cloud/local-auth');

const routes = require('./routes/routes');
const express = require('express');

require('dotenv').config();
// Importing the required modules.

// Provide the required configuration.
// If modifying these scopes, delete token.json.
const SCOPES = ['https://www.googleapis.com/auth/calendar.readonly'];
// The file token.json stores the user's access and refresh tokens, and is
// created automatically when the authorization flow completes for the first
// time.
const TOKEN_PATH = path.join(process.cwd(), 'token.json');
const CREDENTIALS_PATH = path.join(process.cwd(), 'credentials.json');
// Provide the required configuration.

// Google Calendar API Settings.
/**
 * Reads previously authorized credentials from the save file.
 *
 * @return {Promise<OAuth2Client|null>}
 */
async function loadSavedCredentialsIfExist() {
    try {
      const content = await fs.readFile(TOKEN_PATH);
      const credentials = JSON.parse(content);
      return google.auth.fromJSON(credentials);
    } catch (err) {
      return null;
    }
  }
  
  /**
   * Serializes credentials to a file compatible with GoogleAuth.fromJSON.
   *
   * @param {OAuth2Client} client
   * @return {Promise<void>}
   */
  async function saveCredentials(client) {
    const content = await fs.readFile(CREDENTIALS_PATH);
    const keys = JSON.parse(content);
    const key = keys.installed || keys.web;
    const payload = JSON.stringify({
      type: 'authorized_user',
      client_id: key.client_id,
      client_secret: key.client_secret,
      refresh_token: client.credentials.refresh_token,
    });
    await fs.writeFile(TOKEN_PATH, payload);
  }
  
  /**
   * Load or request or authorization to call APIs.
   *
   */
  async function authorize() {
    let client = await loadSavedCredentialsIfExist();
    if (client) {
      return client;
    }
    client = await authenticate({
      scopes: SCOPES,
      keyfilePath: CREDENTIALS_PATH,
    });
    if (client.credentials) {
      await saveCredentials(client);
    }
    return client;
  }
  
  /**
   * Lists the next 10 events on the user's primary calendar.
   * @param {google.auth.OAuth2} auth An authorized OAuth2 client.
   */
  async function listEvents(auth) {
    const calendar = google.calendar({version: 'v3', auth});
    const res = await calendar.events.list({
      calendarId: 'primary',
      timeMin: new Date().toISOString(),
      maxResults: 10,
      singleEvents: true,
      orderBy: 'startTime',
    });
    const events = res.data.items;
    if (!events || events.length === 0) {
      console.log('No upcoming events found.');
      return;
    }
    console.log('Upcoming 5 events:');
    var arr = [];
    var json = {};
    events.map((event, i) => {
        var date = new Date(event.start.dateTime);
        var options = { month: 'long'};
        var month = new Intl.DateTimeFormat('es-ES', options).format(date);

        var day = date.getDate();
        var month = month.charAt(0).toUpperCase() + month.slice(1);

        var start = date.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
        var end = new Date(event.end.dateTime).toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });

        var url = event.htmlLink;

        arr.push({title: event.summary, description: event.description, day: day, month: month.slice(0, 3), start: start, end: end, url: url});
    });
    json = arr;
    return json;
  }
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

// Testing Endpoint
app.get('/test', async (req, res) => {
    try {
        authorize().then(listEvents).catch(console.error);
    } catch (err) {
        console.log(err);
        res.status(500).send('Error fetching events');
    }
});
// Testing Endpoint

// Home endpoint.
app.get('/', async (req, res) => {
    try {
        let events = await listEvents(await authorize());
        res.render('index');
    } catch (err) {
        console.log(err);
        res.status(500).send('Error fetching events');
    }
});
// Home endpoint.

// Data endpoint.
app.get('/data/events', async (req, res) => {
    try {
        let events = await listEvents(await authorize());
        res.json(events);
    } catch (err) {
        console.log(err);
        res.status(500).send('Error fetching events');
    }
});
// Data endpoint.

// ************* Routes *************

// Define the port where the server will listen for requests.
const PORT = 81;
app.listen(PORT, () => {
    console.log(`Node / PHP server running on http://localhost:${PORT}`);
});
// Define the port where the server will listen for requests.
