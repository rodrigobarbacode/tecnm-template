const express = require('express');
const { exec } = require('child_process');
const path = require('path');
const app = express();
const port = 3000;

// Define the directory where your CSS files are located
const public_dir = path.join(__dirname, 'php/public');

// Serve static files from the 'public' directory
app.use('/public', express.static(public_dir));

app.get('/', (req, res) => {
    exec('php source/php/index.php', (error, stdout, stderr) => {
        if (error) {
            console.error(`exec error: ${error}`);
            res.status(500).send(`Server Error: ${error.message}`);
            return;
        }
        if (stderr) {
            console.error(`stderr: ${stderr}`);
            res.status(500).send(`Server Error: ${stderr}`);
            return;
        }
        res.send(stdout);
    });
});

app.listen(port, () => {
    console.log(`Node.js server is running on http://localhost:${port}`);
});