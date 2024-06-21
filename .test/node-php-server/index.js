const express = require('express');
const phpExpress = require('php-express')({
    binPath: 'php' // Ruta a tu ejecutable de PHP, puede ser 'php' si está en tu PATH
});

const app = express();

// Configura la extensión .php para ser manejada por php-express
app.set('views', './views');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

// Usa php-express para servir archivos .php
app.use(phpExpress.router);

app.get('/', (req, res) => {
    res.render('index.php');
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`);
});
