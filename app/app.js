/* Libraries */
const path = require("path");

const routes = require("./routes/routes");
const express = require("express");
const api = require("./api/api");
/* Libraries */

// Importing PHP-Express.
const phpExpress = require("php-express")({
  binPath: "php",
});
// Importing PHP-Express.

// Create Express application.
const app = express();
// Create Express application.

// Define the directory where the public files are located.
const assets_dir = path.join(__dirname, "views/php/public/assets");
const icons_dir = path.join(__dirname, "views/php/public/icons");
const images_dir = path.join(__dirname, "views/php/public/img");
const json_dir = path.join(__dirname, "views/php/public/json");
const misc_dir = path.join(__dirname, "views/php/main/misc");
const css_dir = path.join(__dirname, "views/php/public/css");
const pdf_dir = path.join(__dirname, "views/php/public/pdf");
const js_dir = path.join(__dirname, "views/php/public/js");
// Define the directory where the public files are located.

// Serve static files from the 'public' directory.
app.use("/assets", express.static(assets_dir));
app.use("/icons", express.static(icons_dir));
app.use("/img", express.static(images_dir));
app.use("/json", express.static(json_dir));
app.use("/misc", express.static(misc_dir));
app.use("/pdf", express.static(pdf_dir));
app.use("/css", express.static(css_dir));
app.use("/js", express.static(js_dir));
// Serve static files from the 'public' directory.

// Setting up the view engine.
app.set("views", "./views/php/main");
app.engine("php", phpExpress.engine);
app.set("view engine", "php");
// Setting up the view engine.

// Use php-express to serve all .php files.
app.all(/.+\.php$/, phpExpress.router);
// Use php-express to serve all .php files.

// Use the routes defined in the routes.js file.
app.use(routes);
// Use the routes defined in the routes.js file.

// Use the routes defined in the api.js file.
app.use('/api', api);
// Use the routes defined in the api.js file.

/* Routes */

// Home.
app.get("/", async (req, res) => {
  try {
    res.render("index");
  } catch (err) {
    console.log(err);
    res.status(500).send("Error fetching events");
  }
});
// Home.

/* Routes */

// Define the port where the server will listen for requests.
const PORT = 3000;
app.listen(PORT, () => {
  console.log(`Node / PHP server running on http://localhost:${PORT}`);
});
// Define the port where the server will listen for requests.