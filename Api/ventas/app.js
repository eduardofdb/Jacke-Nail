import express from 'express';
import cors from 'cors';
import router from './routes/routes.js';
import rutas from './routes/rutaspdf.js';
import multer from 'multer';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Crear una instancia de Express
const app = express(); 
app.use(express.json());

const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, path.join(__dirname, 'public', 'images')); // Carpeta donde se guardarán las imágenes
  },
  filename: (req, file, cb) => {
    const fecha = Date.now();
    cb(null, `${fecha}_${file.originalname}`);
  },
});

const upload = multer({
  storage: storage,
  limits: { fileSize: 500000 },
});

app.use(express.static(path.join(__dirname, 'public', 'images'))); // Carpeta pública para las imágenes

app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));
app.use(express.static('public'));


const PORT = 3000;

// Configurar una ruta básica
app.use('/Ventas', router,rutas);


// Iniciar el servidor en el puerto especificado
app.listen(PORT, () => {
  console.log(`Servidor escuchando en el puerto ${PORT}`);
});
