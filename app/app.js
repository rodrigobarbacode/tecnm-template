// Use .env file to load environment variables.
require("dotenv").config();

// Load the required modules.
const fs = require("fs");
const path = require("path");
const express = require("express");

// Load the routes.
const api = require("./api");
const routes = require("./routes");

// Create the express app.
const app = express();
const PORT = 3001;

// Set EJS as the view engine.
app.set("view engine", "ejs");

// Use static folder to serve static files.
app.use(express.static(path.join(__dirname, "public")));

// Load the routes.
app.use("/", routes);
app.use("/api", api);

// Run the app.
app.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
});