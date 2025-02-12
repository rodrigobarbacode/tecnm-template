const path = require("path");
const express = require("express");

module.exports = (app) => {
    const staticPaths = {
        "/assets": "/public/assets",
        "/img": "/public/img",
        "/json": "/public/json",
        "/pdf": "/public/pdf",
        "/css": "/public/css",
        "/js": "/public/js",
    };

    for (const [route, folder] of Object.entries(staticPaths)) {
        app.use(route, express.static(path.join(__dirname, "..", folder)));
    }
};