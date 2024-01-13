import express from 'express';
import {
  obtenerUsuarios, crearUsuario, actualizarUsuario, eliminarUsuario, buscarunusuario,
  actualizarEstadoUsuario, editarU, cambiarEstadousuarios
} from '../controladores/Usuarios.js';
import {
  obtenerVentas, CrearVenta, actualizaVenta, obtenerunaventa,
  eliminarVenta, AgregarVentas, buscaruninsumosV, actualizarCantidadInsumo
} from '../controladores/ventas.js';
import { obtenerInsumos, obtenerInsumosinactivos, crearInsumos, buscaruninsumos, editarinsumo, eliminarInsumos, cambiarEstadoInsumo,actualizarInsumo} from '../controladores/Insumos.js';
import { obtenerServiciosin, buscarunServicio, obtenerServicios, crearServicios, EliminarServicios, agregar, editar, actualizarServicio, cambiarEstadoServicio } from '../controladores/Servicios.js';
import multer from 'multer';
import path from 'path';




const fecha = Date.now();

const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, './public/images/'); // Carpeta donde se guardarán las imágenes
  },
  filename: (req, file, cb) => {
    cb(null, `${fecha}_${file.originalname}`);
  },
});

const fileFilter = function (req, file, cb) {
  // Define los tipos de archivos permitidos
  const allowedFileTypes = /jpeg|jpg|png/;

  // Verifica la extensión del archivo y el tipo MIME
  const extname = allowedFileTypes.test(path.extname(file.originalname).toLowerCase());
  const mimetype = allowedFileTypes.test(file.mimetype);

  if (extname && mimetype) {
    cb(null, true);
  } else {
    cb(new Error('Solo se permiten archivos JPEG, JPG y PNG'));
  }
};

const upload = multer({
  storage: storage,
  fileFilter: fileFilter,
  limits: { fileSize: 500000 },
});

 
const router = express.Router();



// Colección de usuarios
router.get('/usuarios', obtenerUsuarios);
router.post('/usuarios/crearusuarios', upload.single('imagen'), crearUsuario);
router.put('/usuarios/actualizarusuario/:id', upload.single('imagen'), actualizarUsuario);
router.delete('/usuarios/eliminarusuario/:id', eliminarUsuario);
router.get('/usurios/busacarusuarios/:id', buscarunusuario);
router.patch('/actualizarEstadoUsuario/:id', actualizarEstadoUsuario);
router.get('/Formularo/EditarUsuarios/:id', editarU);
router.put('/cambiarEstadousuarios/:usuarios', cambiarEstadousuarios);

//---------------------------------------- Rutas de la colección de insumos-----------------------------------------------
router.get('/Insumos', obtenerInsumos);
router.get('/Insumosinactivos', obtenerInsumosinactivos);
router.get('/Insumos/busacarinsumo/:id', buscaruninsumos);
router.post('/Insumos/registrarInsumos', upload.single('imagen'), crearInsumos);
router.delete('/Insumos/eliminarInsumo/:id', eliminarInsumos);
router.get('/Insumos/FormEdit/:id', editarinsumo);
router.put('/Insumos/actualizarInsumo/:id', upload.single('imagen'), actualizarInsumo);





// --------------------------------Colección de servicios--------------------------------------------
router.get('/servicios', obtenerServicios);
router.get('/serviciosinativos', obtenerServiciosin);
router.get('/servicios/:id', buscarunServicio);
router.post('/servicios/registrar', upload.single('imagen'), crearServicios);
router.get('/agregar/servicio', agregar);
router.get('/editarservicio/:id', editar);
router.put('/actualizarServicio/:id', upload.single('imagen'), actualizarServicio);
router.delete('/servicio/eliminar/:id', EliminarServicios);
router.put('/cambiarEstadoServicio/:servicio', cambiarEstadoServicio);



// Rutas de la colección de insumos
router.get('/Insumos', obtenerInsumos);
router.get('/Insumos/busacarinsumo/:id', buscaruninsumos);
router.post('/Insumos/registrarInsumos', upload.single('imagen'), crearInsumos);
router.delete('/Insumos/eliminarInsumo/:id', eliminarInsumos);
router.get('/Insumos/FormEdit/:id', editarinsumo);
router.put('/cambiarEstado/:idInsumo', cambiarEstadoInsumo);


// Colección de ventas
router.get('/ventas', obtenerVentas,);
router.post('/crearVenta', CrearVenta);
router.put('/actualizarventa/:id', actualizaVenta);
router.get('/obtenerunaventa/:id', obtenerunaventa);
router.delete('/eliminarventa/:id', eliminarVenta);
router.get('/agregar/Ventas', AgregarVentas);
router.get('/Insumos/buscarinsumo/:id', buscaruninsumosV);
router.put('/actualizarCantidad/:idInsumo', actualizarCantidadInsumo);

router.get('/', (req, res) => {
  res.render('index', { title: 'Mi Página' }); // Renderiza views/index.ejs
});



export default router;
