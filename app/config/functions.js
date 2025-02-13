// Load the express module.
const express = require('express');

// Create a router.
const router = express.Router();

// Function to render a page on a GET request.
function renderPage(p, t) {
    return (req, res) => {
        res.render(p, (err, renderizer) => {
            if (err) return res.status(500);
            res.render("index", {
                title: t,
                content: renderizer
            });
        });
        
    };
}

// Export the functions.
module.exports = {
    renderPage
}