// Import the configuration file.
const config = require("./config.json");

// Load the required modules.
const path = require("path");
const express = require("express");
const process = require("process");
const axios = require("axios");
const { DateTime } = require("luxon");

const fs = require("fs").promises;

// Construct the router.
const router = express.Router();

/* Google API */

// Import the required libraries.
const { google } = require("googleapis");
const { authenticate } = require("@google-cloud/local-auth");
const { time } = require("console");
// Import the required libraries.

// Provide the required configuration.
// If modifying these scopes, delete token.json.
const SCOPES = [
  "https://www.googleapis.com/auth/calendar.readonly",
  "https://www.googleapis.com/auth/spreadsheets.readonly",
];
// The file token.json stores the user's access and refresh tokens, and is
// created automatically when the authorization flow completes for the first
// time.
const TOKEN_PATH = path.join(process.cwd(), "api/google/token.json");
const CREDENTIALS_PATH = path.join(
  process.cwd(),
  "api/google/credentials.json"
);
// Provide the required configuration.

// Google Auth Credentials.
/**
 * Reads previously authorized credentials from the save file.
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
 * @param {OAuth2Client} client
 * @return {Promise<void>}
 */
async function saveCredentials(client) {
  const content = await fs.readFile(CREDENTIALS_PATH);
  const keys = JSON.parse(content);
  const key = keys.installed || keys.web;
  const payload = JSON.stringify({
    type: "authorized_user",
    client_id: key.client_id,
    client_secret: key.client_secret,
    refresh_token: client.credentials.refresh_token,
  });
  await fs.writeFile(TOKEN_PATH, payload);
}

/**
 * Load or request or authorization to call APIs.
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
// Google Auth Credentials.

// Google Calendar API.
/*
 * Lists the next 10 events on the user's primary calendar.
 * @param {google.auth.OAuth2} auth An authorized OAuth2 client.
 */
async function listEvents(auth) {
  const calendar = google.calendar({ version: "v3", auth });
  const res = await calendar.events.list({
    calendarId: "primary",
    timeMin: new Date().toISOString(),
    maxResults: 10,
    singleEvents: true,
    orderBy: "startTime"
  });
  
  const events = res.data.items;
  if (!events || events.length === 0) {
    return null;
  }

  const json = events.map(event => {
    const startRaw = event.start.date || event.start.dateTime;
    const startDate = DateTime.fromISO(startRaw).setLocale('es-MX');
  
    const startDay = startDate.day;
    const startMonth =  startDate.monthShort.charAt(0).toUpperCase() + startDate.monthShort.slice(1);
  
    const startHour = startDate.toFormat("hh:mm a");
  
    const endRaw = event.end.date || event.end.dateTime;
    let endDate = DateTime.fromISO(endRaw).setLocale('es-MX');
    if (event.start.date !== undefined) {
      endDate = endDate.minus({ days: 1 });
    }
  
    const endDay = endDate.day;
    const endMonth = endDate.monthShort.charAt(0).toUpperCase() + endDate.monthShort.slice(1);
  
    const endHour = endDate.toFormat("hh:mm a");
  
    const url = event.htmlLink;

    const isAllDayEvent = startDate.toFormat("YYYY-mm-dd") === endDate.toFormat("YYYY-mm-dd");

    return {
      title: event.summary,
      description: event.description,
      day: {startDay, endDay},
      month: {startMonth, endMonth},
      hour: {startHour, endHour},
      url,
      isAllDayEvent
    }
  });

  return json;
}
// Google Calendar API.

// Google Sheets API.

/*
 * Convert a Google Drive link image to an embedded link.
 * @param {string} driveLink The Google Drive link.
 * @return {string} The embedded link.
 */
function convertToEmbedded(driveLink) {
  try {
    // Obtener el ID del archivo desde el enlace de Google Drive
    const fileId = driveLink.split('/d/')[1].split('/')[0];

    // Construir el enlace directo para la imagen
    const directLink = `https://lh3.googleusercontent.com/d/${fileId}?authuser=1/`;
    return directLink;
  } catch (error) {
    return null;
  }
}

/*
 * Get Changing Time of Banner from the Google Sheet.
 * @see https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
 * @param {google.auth.OAuth2} auth The authenticated Google OAuth client.
 */
async function getChangingTimeBanner(auth) {
  const sheets = google.sheets({ version: "v4", auth });
  const res = await sheets.spreadsheets.values.get({
    spreadsheetId: "1uaPGs-etR0DbNxYyo0XPb6bhjOTt1shyRhTTDkBNnQ0",
    range: "D2",
  });
  const rows = res.data.values;
  if (!rows || rows.length === 0) {
    console.log("No data found.");
    return;
  }
  return { time: rows[0][0] };
}

/*
 * Gets the all banners from the Google Sheet.
 * @see https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
 * @param {google.auth.OAuth2} auth The authenticated Google OAuth client.
 */
async function getBanners(auth) {
  const sheets = google.sheets({ version: "v4", auth });
  const res = await sheets.spreadsheets.values.get({
    spreadsheetId: "1uaPGs-etR0DbNxYyo0XPb6bhjOTt1shyRhTTDkBNnQ0",
    range: "A2:C30",
  });
  const rows = res.data.values;
  if (!rows || rows.length === 0) {
    console.log("No data found.");
    return;
  }

  const folderPath = path.join(__dirname, "../public/img/banners");

  //Clean the banners folder
  await fs.rm(folderPath, { recursive: true, force: true });
  await fs.mkdir(folderPath);

  const arr = [];
  let i = 1;
  for (const row of rows) {
    const json = {
      url: row[0],
      image: null,
      date: row[2],
    }

    try {
      //Get the banner from Google Photos
      const response = await axios({
        method: 'GET',
        url: convertToEmbedded(row[1]),
        responseType: 'arraybuffer',
      });

      const filename = `${i}.png`;

      //Save the banner in the file system
      await fs.writeFile(path.join(folderPath, filename), response.data);

      json.image = `img/banners/${filename}`;
    } catch (err) {
      console.error(err);
      console.log("Error saving a banner.");
    }

    arr.push(json);

    i++;
  }

  return arr;
}

/*
 * Get max news from the Google Sheet.
 * @see https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
 * @param {google.auth.OAuth2} auth The authenticated Google OAuth client.
 */
async function getNewsMax(auth) {
  const sheets = google.sheets({ version: "v4", auth });
  const res = await sheets.spreadsheets.values.get({
    spreadsheetId: "1_hK4uuM1RgWID7Qo7OlHhEvBTD6Ff0yNn4_644P66k8",
    range: "J2",
  });
  const rows = res.data.values;
  if (!rows || rows.length === 0) {
    console.log("No data found.");
    return;
  }
  return { max: rows[0][0] };
}

/*
 * Get Changing Time of News from the Google Sheet.
 * @see https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
 * @param {google.auth.OAuth2} auth The authenticated Google OAuth client.
 */
async function getChangingTimeNews(auth) {
  const sheets = google.sheets({ version: "v4", auth });
  const res = await sheets.spreadsheets.values.get({
    spreadsheetId: "1_hK4uuM1RgWID7Qo7OlHhEvBTD6Ff0yNn4_644P66k8",
    range: "N2",
  });
  const rows = res.data.values;
  if (!rows || rows.length === 0) {
    console.log("No data found.");
    return;
  }
  return { time: rows[0][0] };
}

/*
 * Gets the all news from the Google Sheet.
 * @see https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
 * @param {google.auth.OAuth2} auth The authenticated Google OAuth client.
 */
async function getNews(auth) {
  const sheets = google.sheets({ version: "v4", auth });
  const res = await sheets.spreadsheets.values.get({
    spreadsheetId: "1_hK4uuM1RgWID7Qo7OlHhEvBTD6Ff0yNn4_644P66k8",
    range: "A2:F300",
  });
  const rows = res.data.values;
  if (!rows || rows.length === 0) {
    console.log("No data found.");
    return;
  }

  const folderPath = path.join(__dirname, "../public/img/news");

  //Clean the news folder
  await fs.rm(folderPath, { recursive: true, force: true });
  await fs.mkdir(folderPath);

  const arr = [];
  const news = await getNewsMax(await authorize());
  arr.push({ max: news.max });

  let i = 1;
  for (const row of rows) {
    const json = {
      image: null,
      date_title: row[1],
      date: row[2],
      title: row[3],
      description: row[4],
      pdf: row[5],
    }

    try {
      //Get the new from Google Photos
      const response = await axios({
        method: 'GET',
        url: convertToEmbedded(row[0]),
        responseType: 'arraybuffer',
      });

      const filename = `${i}.png`;

      //Save the new in the file system
      await fs.writeFile(path.join(folderPath, filename), response.data);

      json.image = `img/news/${filename}`
    } catch (err) {
      console.error(err);
      console.log("Error saving a new.");
    }

    arr.push(json);

    i++;
  }

  return arr;
}

/*
 * Prints the all annexes from the Google Sheet.
 * @see https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
 * @param {google.auth.OAuth2} auth The authenticated Google OAuth client.
 */
async function listAnnexes(auth) {
  const sheets = google.sheets({ version: "v4", auth });
  const res = await sheets.spreadsheets.values.get({
    spreadsheetId: "1ITNAswP7Z5VB5IHHe7JQT74M_-IVIF2D2324dkNsnvc",
    range: "A2:B20",
  });
  const rows = res.data.values;
  if (!rows || rows.length === 0) {
    console.log("No data found.");
    return;
  }
  // Create a JSON object with the data.
  var arr = [];
  var json = {};
  rows.map((row, i) => {
    arr.push({
      link: row[0],
      image: convertToEmbedded(row[1])
    });
  });
  json = arr;

  return json;
}
// Google Sheets API.

/* Google API */

// Middleware that verifies the auth_key.
const authMiddleware = (req, res, next) => {
  const authKey = req.query.auth_key;
  // Check if the auth_key is valid.
  if (!authKey || authKey !== config.authKey) {
    return res
      .status(403)
      .json({ message: "Acceso denegado: clave de autenticación inválida" });
  }
  // Check if the auth_key is valid.
  // Call the next middleware.
  next();
  // Call the next middleware.
};
// Middleware that verifies the auth_key.

/* Routes */

// Generate Token Endpoint.
router.get("/generate-token", async (req, res) => {
  try {
    const client = await authorize();
    res.json({ message: "Token generado correctamente" });
  } catch (err) {
    console.log(err);
    res.status(500).send("Error fetching events");
  }
});

// Banners Endpoint. (Requires auth_key)
router.get("/data/banners", authMiddleware, async (req, res) => {
  try {
    const banners_time = await getChangingTimeBanner(await authorize());
    const banners = await getBanners(await authorize());

    fs.writeFile(
      path.join(process.cwd(), "/public/json/banner-list.json"),
      JSON.stringify(banners),
      (err) => {
        if (err) {
          console.log(err);
        }
      }
    );

    fs.writeFile(
      path.join(process.cwd(), "/public/json/banner-time.json"),
      JSON.stringify(banners_time),
      (err) => {
        if (err) {
          console.log(err);
        }
      }
    );
    
    res.json({ message: 'Banners updated.' });
  } catch (err) {
    console.log(err);
    res.status(500).send("Error fetching events");
  }
});
// Banners Endpoint. (Requires auth_key)

// News Data Endpoint. (Requires auth_key)
router.get("/data/news", authMiddleware, async (req, res) => {
  try {
    const news_time = await getChangingTimeNews(await authorize());
    const news = await getNews(await authorize());

    fs.writeFile(
      path.join(process.cwd(), "/public/json/news-list.json"),
      JSON.stringify(news),
      (err) => {
        if (err) {
          console.log(err);
        }
      }
    );

    fs.writeFile(
      path.join(process.cwd(), "/public/json/news-time.json"),
      JSON.stringify(news_time),
      (err) => {
        if (err) {
          console.log(err);
        }
      }
    );
    
    res.json({ message: 'News updated.' });
  } catch (err) {
    console.log(err);
    res.status(500).send("Error fetching events");
  }
});
// News Data Endpoint. (Requires auth_key)

// Events Data Endpoint.
router.get("/data/events", async (req, res) => {
  try {
    let events = await listEvents(await authorize());
    res.json(events);
  } catch (err) {
    console.log(err);
    res.status(500).send("Error fetching events");
  }
});
// Events Data endpoint.

// Annexes Data Endpoint. (Requires auth_key)
router.get("/data/annexes", authMiddleware, async (req, res) => {
  try {
    let annexes = await listAnnexes(await authorize());

    fs.writeFile(
      path.join(process.cwd(), "/public/json/annexes-list.json"),
      JSON.stringify(annexes),
      (err) => {
        if (err) {
          console.log(err);
        }
      }
    );
    
    res.json({ message: 'Annexes updated.' });
  } catch (err) {
    console.log(err);
    res.status(500).send("Error fetching events");
  }
});
// Annexes Data Endpoint. (Requires auth_key)

/* Routes */

// Export the router.
module.exports = router;
// Export the router.